<?php

namespace App\Services;

use Exception;

class NumberClassifier
{
    protected $number;

    /**
     * @param int
     */
    public function __construct($number)
    {
        $this->setNumber($number);
    }

    /**
     * Classify the number using getClassification() function
     * 
     * @return int
     */
    public function classify()
    {
        return getClassification($this->number);
    }

    /**
     * Number setter
     * 
     * @param $number
     * @return self
     */
    protected function setNumber($number)
    {
        if ($number <= 0) {
            throw new Exception('The parameter must be greater than 0');
        }

        $this->number = (int) $number;

        return $this;
    }
}