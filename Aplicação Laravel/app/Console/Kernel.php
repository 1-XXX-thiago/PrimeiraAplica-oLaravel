<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    
     @var array
     
    protected $commands = [
        Commands\ModelMakeCommand::class
    ];

    
     
     
      @param  
      @return 
     
    protected function schedule(Schedule $schedule)
    {
        
        
    }

    
     
     
      @return void
     
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
