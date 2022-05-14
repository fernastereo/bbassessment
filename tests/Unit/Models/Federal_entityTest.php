<?php

namespace Tests\Unit\Models;

use App\Models\Federal_entity;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Federal_entityTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_many_municipalities()
    {
        $federal_entity = new Federal_entity();
        $this->assertInstanceOf(Collection::class, $federal_entity->municipalities);
    }
}
