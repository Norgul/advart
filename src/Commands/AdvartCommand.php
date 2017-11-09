<?php

namespace Norgul\Advart\Commands;

use Norgul\Advart\AdvartServiceProvider;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AdvartCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make {name} {--resource=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Advart - Artisan make command helper';

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
        $name = $this->argument('name');

        if (preg_match('/controller/i', $name))
            $this->makeController($name);
        else
            echo 'nije';

    }

    protected function makeController($name)
    {
        try {
            Artisan::call('make:controller', ['name' => $name]);
            $this->info('Controller created successfully');
        } catch (\Exception $e) {
            $this->error("Whoops, something went wrong.");
        }
    }
}
