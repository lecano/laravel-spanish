<?php

namespace Lecano\Spanish\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spanish:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs spanish language';

    /**
     * Execute the console command.
     *
     * @param \App\Support\DripEmailer $drip
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('vendor:publish', [
            '--provider' => 'Lecano\Spanish\SpanishServiceProvider',
        ]);

        $this->info('Spanish language installed!');
    }
}
