<?php

trait SomeExtFunctions {

    function тюды() {
        echo "тюды";
    }

    function cюды() {
        echo "cюды";
    }

}

class Test {
    use SomeExtFunctions;
}

$test = new Test();
$test->cюды();
$test->cюды();
