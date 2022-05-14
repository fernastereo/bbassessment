<?php

namespace Tests\Unit\Models;

use App\Models\Settlement;
use App\Models\Settlementtype;
use App\Models\Zipcode;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettlementTest extends TestCase
{
    use RefreshDatabase;

    public function test_belongs_to_zipcode()
    {
        $settlement = Settlement::factory()->create();
        $this->assertInstanceOf(Zipcode::class, $settlement->zipcode);
    }

    public function test_belongs_to_settlementtype()
    {
        $settlement = Settlement::factory()->create();
        $this->assertInstanceOf(Settlementtype::class, $settlement->settlementtype);
    }
}
