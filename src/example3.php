<?php

class AccessModifiers {
    public $publicValue;
    protected $protectedValue;
    private $privateValue;

    function publicMethod() {
        echo "public";
    }

    protected function protectedMethod() {
        echo "protected";
    }

    private function privateMethod() {
        echo "private";
    }

    function test() {
        echo $this->privateValue;
        $this->privateMethod();
    }

}

class AccessModifiersInheritance extends AccessModifiers {

    function test() {
        echo $this->publicValue;
        echo $this->protectedValue;
        echo $this->privateValue;

        $this->publicMethod();
        $this->protectedMethod();
        $this->privateMethod();
    }
}

$test = new AccessModifiersInheritance();
$test->test();