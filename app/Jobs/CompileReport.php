<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;

class CompileReport implements ShouldQueue
{

    private $reportId;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reportId)
    {
        //
        $this->reportId = $reportId;//تزریق input(reportIdاز فرم)به جاب
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(User $user)
    {
        var_dump("compile Reports  {$this->reportId}");
    }
}
