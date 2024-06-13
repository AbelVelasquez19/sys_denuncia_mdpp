<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TaskWhatsApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:whatsapp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio de mensaje a whatsapp a los funcionarios';

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
