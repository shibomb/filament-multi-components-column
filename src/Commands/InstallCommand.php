<?php

namespace Shibomb\FilamentMultiComponentsColumn\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'filament-multi-components-column:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the resources';

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
     * @return int
     */
    public function handle()
    {
        $this->comment('Publishing Multi Components Column Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'filament-multi-components-column-config']);

        $this->info('Filament Multi Components Column was installed successfully.');

        return 0;
    }
}
