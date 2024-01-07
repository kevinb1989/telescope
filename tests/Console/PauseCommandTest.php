<?php

namespace Laravel\Telescope\Tests\Console;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Laravel\Telescope\Database\Factories\EntryModelFactory;
use Laravel\Telescope\Storage\EntryModel;
use Laravel\Telescope\Tests\FeatureTestCase;

class PauseCommandTest extends FeatureTestCase
{
    public function test_pause_command_will_stop_watchers_for_30_days()
    {
        $command = $this->artisan('telescope:pause');
            
        $command->expectsOutput('Telescope watchers paused successfully.');
        $this->assertTrue(Cache::has('telescope:pause-recording'));
    }
}
