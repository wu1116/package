<?php

namespace Wsc\Pt;

class Pt{

    public function __construct()
    {
        echo preg_replace_callback('~-([a-z])~', function ($match) {
            return strtoupper($match[1]);
        }, 'hello-world');
    }

}
