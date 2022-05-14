<?php

namespace Tests\Unit\Models;

use App\Models\Settlementtype;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettlementtypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_many_settlements()
    {
        $settlementtype = new Settlementtype();
        $this->assertInstanceOf(Collection::class, $settlementtype->settlements);
    }
}