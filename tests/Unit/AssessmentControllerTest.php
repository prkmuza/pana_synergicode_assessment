<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssessmentControllerTest extends TestCase
{
    /**
     * Test start_assessment method.
     *
     * @return void
     */
    public function testStartAssessment()
    {
        $response = $this->get('/start_assessment');

        $response->assertStatus(200)
                 ->assertViewIs('start_assessment.index');
    }


    public function testSave()
    {
        $postData = [
            'Name' => 'John Doe',
            'Email' => 'john@example.com',
            'Comments' => 'Test comment from phpunit',
        ];

        $response = $this->post('/start_assessment/save', $postData);

        $response->assertStatus(200)
                 ->assertSeeText("200"); 
    }

}
