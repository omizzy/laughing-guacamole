<?php

namespace Recipes\Avocado;

/**
 * Class Guacamole
 */
class Guacamole
{
    /**
     * @var int
     */
    private $howMuch;
    
    private $text=<<<RECIPE
To make %s ounces of guacamole, you will need
1) Avocados - smash them up
2) Onions - cut them up into bits
3) Tomatos - cut them up
4) Lemon - squeeze out the juice 
5) Blend all of these
RECIPE;
    
    /**
     * Constructor
     */
    public function __construct($howMuch)
    {
        // set it
        $this->howMuch = $howMuch
    }

    public function ingredients()
    {
        return sprintf(self::$text, $this->howMuch);
    }
}
