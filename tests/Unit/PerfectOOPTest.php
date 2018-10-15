<?php

use App\Services\NumberClassifier;

class PerfectOOPTest extends TestCase
{
    protected $oopService;

    protected $testValues = [
        'perfect' => [6, 28, 8128],
        'abundant' => [12, 18, 20],
        'deficient' => [1, 22, 43],
    ];

    /** @test */
    public function it_can_classify_perfect_numbers()
    {
        foreach ($this->testValues['perfect'] as $value) {
            $service = new NumberClassifier($value);

            $this->assertEquals('perfect', $service->getClassification());
        }
    }

    /** @test */
    public function it_can_classify_abundant_numbers()
    {
        foreach ($this->testValues['abundant'] as $value) {
            $service = new NumberClassifier($value);

            $this->assertEquals('abundant', $service->getClassification());
        }
    }

    /** @test */
    public function it_can_classify_deficient_numbers()
    {
        foreach ($this->testValues['deficient'] as $value) {
            $service = new NumberClassifier($value);

            $this->assertEquals('deficient', $service->getClassification());
        }
    }
}
