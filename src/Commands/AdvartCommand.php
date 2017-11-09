<?php

namespace Norgul\Advart\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AdvartCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make {name} {--f|flag= : Specify a flag to forward}';

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
        $options = $this->options();

        if (preg_match('/controller/i', $name))
            $this->makeController($name, $options);

        if (preg_match('/model/i', $name))
            $this->makeModel($name);

        if (preg_match('/request/i', $name))
            $this->makeRequest($name);

        if (preg_match('/seeder/i', $name))
            $this->makeSeeder($name);
    }

    protected function makeController($name, $options)
    {
        try {
            Artisan::call('make:controller', [
                'name'       => $name,
                '--resource' => in_array($options['flag'], ['resource', 'r']),
                '--model'    => in_array($options['flag'], ['model', 'm']),
                '--parent'   => in_array($options['flag'], ['parent', 'p']),
            ]);
            $this->info('Controller created successfully');
        } catch (\Exception $e) {
            $this->error("Whoops, something went wrong.");
        }
    }

    private function makeModel($name)
    {
    }

    private function makeRequest($name)
    {
    }

    private function makeSeeder($name)
    {
    }
}
