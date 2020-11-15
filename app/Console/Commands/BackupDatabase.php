<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mk:backupdb {user=Milestone}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the application database';

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
        // $name = $this->argument('user');
        // $this->info("your name is $name");
        //$this->call('route:list');
       // $this->callSilent('route:list');
        // if($this->confirm("Would you like to continue ?"))
        // $this->info("Loading...");
        // else
        // $this->error("disconnected");
    //  $username =  $this->ask('Enter your username ');
    //  $pass = $this->secret("Enter your password");
     //$this->info("Username $username and Password: $pass");
//    $env = config('app.name');
//    $this->info($env);
    }
}
