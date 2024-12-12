<?php

namespace Bravik\MyPackage\Console\Commands;

use Illuminate\Console\Command;

class TestMe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my-package:test-me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('============Test me command============');
    }
}
