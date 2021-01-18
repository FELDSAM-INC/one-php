<?php

use Gregwar\RST\Nodes\ListNode;
use Gregwar\RST\Nodes\Node;
use Gregwar\RST\Nodes\TableNode;
use Gregwar\RST\Nodes\TitleNode;
use Gregwar\RST\Parser;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require __DIR__ . '/vendor/autoload.php';

$parser = new Parser();
$parser->getEnvironment()->getErrorManager()->abortOnError(false);

// parse docs and get nodes we are interested in
$nodes = $parser->parseFile('https://raw.githubusercontent.com/OpenNebula/docs/master/source/development_guide/system_interfaces/api.rst')->getNodes(function(Node  $node){
    if ($node instanceof TitleNode) {
        $method = (string)$node->getValue();
        if (preg_match('/^one\.(.+)\.(.+)$/', $method, $m)) {
            return true;
        }
    }

    return ($node instanceof TableNode || $node instanceof ListNode);
});

$method = null;
$methods = [];
foreach ($nodes as $node) {
    if ($node instanceof TitleNode) {
        $method = (string)$node->getValue();
    }

    if ($method) {
        if (!array_key_exists($method, $methods)) {
            $methods[$method] = [
                'desc' => '',
                'table' => [],
            ];
        }
    }

    if ($method && $node instanceof ListNode) {
        $html = $node->render();
        if(preg_match('/Description\<\/strong\>\:\s(.+)\<\/li\>/', $html, $m)) {
            $methods[$method]['desc'] = $m[1];
        }
    }

    if ($method && empty($methods[$method]['table']) && $node instanceof TableNode) {
        $methods[$method]['table'] = $node->renderArray();
    }
}

function dotToCamelCase($string) {
    $ex = explode('.', $string);
    $string = '';
    $first = true;
    foreach ($ex as $w) {
        if ($w === 'one') continue;

        if ($first) {
            $string .= $w;
            $first = false;
            continue;
        }

        $string .= ucfirst($w);
    }

    return $string;
}

function numToChar($n) {
    $alphabet = array( 'a', 'b', 'c', 'd', 'e',
        'f', 'g', 'h', 'i', 'j',
        'k', 'l', 'm', 'n', 'o',
        'p', 'q', 'r', 's', 't',
        'u', 'v', 'w', 'x', 'y',
        'z'
    );

    return $alphabet[$n];
}

function type($t) {
    $t = strtolower($t);

    if($t === 'boolean') return 'bool';

    return $t;
}

$methodDefs = '';
foreach ($methods as $m => $d) {
    $method = dotToCamelCase($m). '(';
    $table = $d['table'];
    $desc = $d['desc'];
    $argsIn = [];
    $argsPass = [];
    $argsDoc = [];
    $i = 0;
    foreach ($table as $r) {
        if ($r[0] === 'IN') {
            // skip session arg
            if (strpos($r[2], 'session') !== false) continue;

            $argsIn[] = type($r[1]) . ' $' . numToChar($i);
            $argsPass[] = '$' . numToChar($i);
            $argsDoc[] = '     * @param ' . type($r[1]) . ' $' . numToChar($i) . ' ' . strip_tags($r[2]);
            $i++;
        }
    }
    $method .= implode(', ', $argsIn) . ')';
    $argsPass = implode(', ', $argsPass);
    $argsDoc = implode("\n", $argsDoc);
    $def =<<<EOF
    /**
     * $desc
     *
$argsDoc
     * @return \One\Resource
     */
    public function $method {
        return \$this->makeCall('$m', $argsPass);
    }
EOF;
    $methodDefs .= $def . "\n\n";
}

$classFile =<<<EOF
<?php

namespace One;

class One extends OneBase {
    /**
     * Generate and return VNC token only
     *
     * @param int \$a The VM ID.
     * @return \One\Resource
     */
    public function vmVnctokenonly(int \$a) {
        return \$this->makeCall('one.vm.vnctokenonly', \$a);
    }

    /**
     * Generate and return VNC token including VM VNC details
     *
     * @param int \$a The VM ID.
     * @return \One\Resource
     */
    public function vmVnc(int \$a) {
        return \$this->makeCall('one.vm.vnc', \$a);
    }

$methodDefs}
EOF;

// save file
file_put_contents('src/One.php', $classFile);
