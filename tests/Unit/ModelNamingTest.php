<?php

namespace Tests\Unit;

use App\Models\Task;
use Tests\TestCase;

class ModelNamingTest extends TestCase
{
    public function test_task_model_uses_the_expected_laravel_naming(): void
    {
        $this->assertTrue(class_exists(Task::class));
        $this->assertSame('tasks', (new Task)->getTable());
    }
}
