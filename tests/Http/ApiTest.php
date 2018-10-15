<?php


class ApiTest extends TestCase
{
    protected $endPoint = '/api/v1/classify/';

    /** @test */
    public function it_can_classify_numbers_through_http_api_with_oop_option()
    {
        $this->json('GET', $this->endPoint . 'oop/' . 8128)->seeJson([
            'result'    =>  'perfect'
        ]);
    }

    /** @test */
    public function it_can_classify_numbers_through_http_api_with_func_option()
    {
        $this->json('GET', $this->endPoint . 'func/' . 8128)->seeJson([
            'result' => 'perfect'
        ]);
    }

    /** @test */
    public function it_will_error_if_type_of_classification_is_not_available()
    {
        $response = $this->call('GET', $this->endPoint . 'notexisting/' . 1);
        $this->assertEquals(422, $response->status());

        $content = json_decode($response->content());
        $this->assertEquals($content->error, 'The available types are "oop" or "func"');
    }

    /** @test */
    public function it_will_return_a_four_hundredxx_and_an_error_message_if_param_less_than_one()
    {
        $response = $this->call('GET', $this->endPoint . 'func/' .  0);
        $this->assertEquals(422, $response->status());

        $content = json_decode($response->content());
        $this->assertEquals($content->error, 'The parameter must be greater than 0');
    }
}
