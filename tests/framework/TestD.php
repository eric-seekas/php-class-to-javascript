<?php

use TenQuality\Traits\CastJavascriptTrait;

class TestD
{
    use CastJavascriptTrait;

    protected $id;

    protected $name;

    protected $flag;

    protected $castingProperties = [
        'id',
        'flag',
    ];

    public function __set($property, $value)
    {
        if (property_exists($this, $property))
            $this->{$property} = $value;
    }
}