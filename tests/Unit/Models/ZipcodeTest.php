<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Zipcode;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ZipcodeTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_many_settlements()
    {
        $zipcode = new Zipcode();
        $this->assertInstanceOf(Collection::class, $zipcode->settlements);
    }

    public function test_belongs_to_municipality()
    {
        $zipcode = Zipcode::factory()->create();
        $this->assertInstanceOf(Municipality::class, $zipcode->municipality);
    }
}
