<?php

namespace Recipes\Avocado;

class Guacamole
{
    /**
     * @var int
     */
    private $howMuch;
    
    /**
     * Constructor
     */
    public function __construct($howMuch)
    {
        // set it
        $this->howMuch = $howMuch
    }
}
