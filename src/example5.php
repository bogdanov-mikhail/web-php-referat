<?php

class MoreEnjoy {

    public readonly string $value;

    const constValue = "const";

    public function __construct()
    {
        echo self::constValue;
        $this->value = "readonly";
    }

}
