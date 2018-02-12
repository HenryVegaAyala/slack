<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maknz\Slack\Facades\Slack;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Slack::to('#test')->send('Are we rich yet?');
        logger('ok');
    }
}
