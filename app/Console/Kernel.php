<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */ 
    
                       //barnamerizi    instanshiate
    protected function schedule(Schedule $schedule)//new schadual
    {
//         $schedule->exec('touch foo.txt')->everyFiveMinutes();
//         $schedule->command('inspire')
//                  ->hourly()                                                                  //envoyer Url mide
//                 ->sendOutputTo('txt')->emailOutputTo("mohammadreza.developer78@gmail.com")->thenPing("URL");//after save you send
//                 ->emailWrittenOutputTo("mohammadreza.developer78@gmail.com");//jast send email 
//                  ->daily();
//                  ->at("23:40");
//                  ->dailyAt('10:20');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        Commands\Showgriting::class;//register
        require base_path('routes/console.php');
    }
}
