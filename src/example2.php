<?php

class TestComparison {
    public $value;

    function test() {
        echo $this->value;
    }
}

$a = new TestComparison();
$a->value="a";

$b = new TestComparison();
$b->value="a";

if ($a == $b) {
    echo "Равны по значению";
}

if ($a === $b) {
    echo "Равны по ccылке";
}
