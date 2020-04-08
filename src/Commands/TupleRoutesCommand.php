<?php

namespace Allenjd3\TupleRoutes;

use Illuminate\Console\Command;

class TupleRoutesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stub:tuple';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stub out commands on new project installs';

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
        $this->info('Warning The following action is destructive');
        $this->info('This is going to change routes/web.php and app/Providers/RouteServiceProvider.php');
        $this->info('If you have existing changes to these files, make backups before running this command.');
        if ($this->confirm('Are you Sure You want to Continue?')) {
            if(copy(dirname(__FILE__) . '/stubs/web.stub', base_path() . '/routes/web.php'))
            {
                $this->info('Successfully Copied Web Stub'); 
            }

            if(copy(dirname(__FILE__) . '/stubs/RouteServiceProvider.stub', base_path() .'/app/Providers/RouteServiceProvider.php'))
            {
                $this->info('Successfully Copied RouteServiceProvider Stub'); 
            }

        } 
    }
}
