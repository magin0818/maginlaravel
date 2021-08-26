<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Multitenancy\Commands\Concerns\TenantAware;

class tenants extends Command
{
    use TenantAware;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        return $this->line('The tenant is '. Tenant::current()->name);
//        return 0;
    }
}
