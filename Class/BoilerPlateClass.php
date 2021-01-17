<?php

declare(strict_types=1);

namespace Class;

/**
 * Class BoilerPlateClass
 */
class BoilerPlateClass
{
    /**
     * @var integer
     */
    protected $integer;

    /**
     * @var float
     */
    protected $float;

    /**
     * @var string
     */
    protected $string;

    /**
     * @var array
     */
    protected $array;

    /**
     * @var bool
     */
    protected $bool;

    /**
     * @var object|null
     */
    protected $object;

    /**
     * @var array
     */
    const VALID_STRINGS = [
        'house',
        'street',
        'city',
        'country'
    ];
  
    public function __construct(
        int $integer,
        float $float,
        string $string,
        array $array,
        bool $bool,
        object $object = null
    ) {
        $this->integer = $integer;
        $this->float = $float;
        $this->string = $string;
        $this->array = $array;
        $this->bool = $bool;
        $this->object = $object ?: null;
    }

    public function validateString(string $string): bool
    {
        $string = $this->string;
        
        if(in_array($string, BoilerPlateClass::VALID_STRINGS)) {
            return true
        }

        return false
    }
}