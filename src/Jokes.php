<?php

namespace Jokes\Food;

class Guacamole
{
    private $punchLine=<<<JOKE
If life gives you avocados, make guacamole
JOKE;

    public function sayIt()
    {
        return self::$punchLine
    }
}
