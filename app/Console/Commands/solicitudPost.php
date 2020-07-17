<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class solicitudPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkpost
                            {url: Url to check}
                            {status=200 : Status spected}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia solicitud post a una direccion dada';

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
        return 0;
    }
}
