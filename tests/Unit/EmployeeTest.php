<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Http\Controllers\EmployeesController;

class EmployeeTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_if_user_not_logged_in(): void
    {
      $returnedValues = (new EmployeesController)->home();
      $this->assertEmpty($returnedValues);
        //$this->assertTrue(true);
    }
}
