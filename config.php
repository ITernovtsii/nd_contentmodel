<?php
// override ez classes
spl_autoload_register(function ($class) {
    if ($class === 'eZContentObject') {
        require 'extension/nd_contentmodel/classes/ezcontentobject.php';
    } elseif ($class === 'eZContentObjectTreeNode') {
        require 'extension/nd_contentmodel/classes/ezcontentobjecttreenode.php';
    } else {
        return null;
    }
}, true, true);