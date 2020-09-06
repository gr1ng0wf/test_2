<?php

namespace Tests\Feature;

use App\Staff;
use Tests\TestCase;

class StaffTest extends TestCase
{
    /**
     * Test correct return full years staff by birth_date.
     *
     * @return void
     */
    public function testCorrectFullYears()
    {
        $staff = factory(Staff::class, 1)->make(['birth_date' => now()->addYears(-9)->addMonths(2)])->first();
        $this->assertIsInt($staff->fullYears);
        $this->assertEquals(8, $staff->fullYears, "birth_date: {$staff->birth_date}");
    }
}
