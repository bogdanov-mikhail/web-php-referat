<?php

class TestStatic {

    public static $iAmStatic;

    static function callStatic() {
        echo self::$iAmStatic;
        echo TestStatic::$iAmStatic;
    }

}

echo TestStatic::$iAmStatic;
TestStatic::callStatic();

$test = new TestStatic();
$test::$iAmStatic;
$test::callStatic();
