<?php

class PerfectTest extends TestCase
{
    protected $testValues = [
        'perfect'   =>  [6, 28, 8128],
        'abundant'  =>  [12, 18, 20],
        'deficient' =>  [1, 22, 43],
    ];

    /** @test */
    public function it_can_classify_perfect_numbers()
    {
        foreach ($this->testValues['perfect'] as $value) {
            $this->assertEquals('perfect', getClassification($value));
        }
    }

    /** @test */
    public function it_can_classify_abundant_numbers()
    {
        foreach ($this->testValues['abundant'] as $value) {
            $this->assertEquals('abundant', getClassification($value));
        }
    }

    /** @test */
    public function it_can_classify_deficient_numbers()
    {
        foreach ($this->testValues['deficient'] as $value) {
            $this->assertEquals('deficient', getClassification($value));
        }
    }

    /** @test */
    public function it_will_throw_an_exception_if_the_argument_is_zero()
    {
        $this->expectException(Exception::class);
        getClassification(0);
    }

    /** @test */
    public function it_will_throw_an_exception_if_the_argument_is_negative()
    {
        $this->expectException(Exception::class);
        getClassification(-1);
    }
}
