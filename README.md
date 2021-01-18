# OpenNebula API Bindings for PHP

[![Latest Stable Version](https://poser.pugx.org/feldsam-inc/one-php/v/stable)](https://packagist.org/packages/feldsam-inc/one-php)
[![Total Downloads](https://poser.pugx.org/feldsam-inc/one-php/downloads)](https://packagist.org/packages/feldsam-inc/one-php)
[![License](https://poser.pugx.org/feldsam-inc/one-php/license)](https://packagist.org/packages/feldsam-inc/one-php)

This library provides you with XML-RPC client, which parses XML responses to an array.  
You can traverse over it by using dot notation.  
We generated all public methods from [api.rst](https://raw.githubusercontent.com/OpenNebula/docs/master/source/development_guide/system_interfaces/api.rst) file.

Check example method with doc block. For more, check [src/One.php](https://github.com/FELDSAM-INC/one-php/blob/master/src/One.php)

```
/**
 * Retrieves information for all or part of the VMs in the pool.
 *
 * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
 * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
 * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
 * @param int $d VM state to filter by.
 * @param string $e Filter in KEY=VALUE format.
 * @return \One\Resource
 */
public function vmpoolInfoextended(int $a, int $b, int $c, int $d, string $e) {
    return $this->makeCall('one.vmpool.infoextended', $a, $b, $c, $d, $e);
}
```

Your IDE will use this doc blocks, and you have handy documentation inside code. No need to look into official docs page.

## Examples

**Connect to API, create client instance**
```
$client = new \One\One('http://{IP}:2633/RPC2', 'username:password');
```

**Call some method and get response** - `\One\Resource` class instance
```
try {
    $response = $client->vmpoolInfoextended(-1, -1, -1, -1, '');
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
    exit(1);
}
```

**Work with response**  
`\One\Resource` class instance is wrapper over [adbario/php-dot-notation](https://packagist.org/packages/adbario/php-dot-notation)
```
$vms = $response->get('VM');

echo "Total number of VMs is " , $vms->count() , "\n";

foreach($vms->all() as $vm) {
    if (!$vm->isEmpty('USER_TEMPLATE.LABELS')) {
        echo "VM ID ", $vm->get('ID'), " has label(s): ", $vm->get('USER_TEMPLATE.LABELS'), "\n";
    } else {
        echo "VM ID ", $vm->get('ID'), " doesn't have any labels.\n";
    }
}
```

**Index result array by specific subkey**
```
$vms = $response->getIndexedBy('ID', 'VM');
// get VM with ID 2403
$vm = $vms->get(2403);
```

## Development

To contribute bug patches or new features, you can use the github Pull Request model. It is assumed that code and documentation are contributed under the Apache License 2.0.

More info:

* Issues Tracking: [Github issues](https://github.com/FELDSAM-INC/one-php/issues)

## Authors

* Leader: Kristian Feldsam (feldsam@feldhost.net)

## Support

[FeldHost™ as OpenNebula Contributor](https://www.feldhost.net/products/opennebula) offers design, implementation, operation and management of a cloud solution based on OpenNebula.
