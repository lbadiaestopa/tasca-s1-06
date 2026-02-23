<?php

class MyClass {

    public function tellClassName() {
        echo __METHOD__;
    }
}

$object = new MyClass();
$object->tellClassName();
echo PHP_EOL;
echo __LINE__;

?>