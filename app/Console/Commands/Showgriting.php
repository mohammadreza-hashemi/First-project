<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Showgriting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'fuck {name?}';//optional
    protected $signature = 'fuck {name="hassane"}';//optional

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mohammad Description';

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
        $this->info('Hello '.$this->argument('name'));
    }
}
