<?php


namespace learning;


class Engine
{
    use SayHelloTrait;

    protected static $country = 'USA';

    public static function sayHello()
    {
        return 'I am from ' . self::$country . PHP_EOL;
    }

    public function __construct($name)
    {
        $this->name = $name;
        echo self::$country;
        echo self::sayHello();
    }
}