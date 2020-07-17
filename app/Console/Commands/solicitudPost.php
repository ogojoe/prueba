<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Goutte\Client;
//use Symfony\Component\HttpClient\HttpClient;

class solicitudPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkpost';

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
    public function __construct(Client $client)
    {
        parent::__construct();

        $this->client = $client;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $url = 'https://atomic.incfile.com/fakepost';
            $expected = (int) 200;
            $crawler = $this->client->request('POST', $url);
            $status = $this->client->getResponse();
        } catch (\Exception $e) {
            $this->error("Solicitud failed for $url with an exception");
            $this->error($e->getMessage());
            return 2;
        }

        if ($status !== $expected) {
            $this->error("Solicitud failed for $url with a status of '$status' (expected '$expected')");
            return 1;
        }

        $this->info("Solicitud passed for $url!");

        return 0;
    }

    
}
