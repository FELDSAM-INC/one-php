<?php

namespace One\Gregwar\RST\HTML;

class Kernel extends \Gregwar\RST\HTML\Kernel
{
    public function getDirectives()
    {
        $directives = parent::getDirectives();

        $directives = array_merge($directives, array(
            new \Gregwar\RST\HTML\Directives\Wrap('warning')
        ));

        return $directives;
    }
}