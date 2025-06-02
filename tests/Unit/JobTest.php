<?php

namespace Tests\Unit;

use App\Models\Job;
use App\Models\Employer;
use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}

it('belongs to an employer', function(){
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
    'employer_id'=> $employer->id,
]);

//Act and Assert
expect($job->employer->is($employer))->toBeTrue();

});

it('can have tags', function() {

    //Arranje
    $job = Job::factory()->create();

    //Act
    $job->tag('Frontend');

    //Assert
    expect($job->tags)->toHaveCount(1);
});
