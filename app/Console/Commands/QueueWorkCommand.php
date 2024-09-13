<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class QueueWorkCommand extends Command
{
    protected $signature = 'custom:queue-work';
    protected $description = 'Run the queue worker';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // This will call the queue:work command.
        $this->call('queue:work', ['--stop-when-empty' => true]);
    }
}
