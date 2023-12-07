<?php

namespace App\Console\Commands;

use App\Models\scoreboard;
use App\Models\User;
use Illuminate\Console\Command;

class commands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete random';

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
        foreach (User::get() as $u) {
            foreach (scoreboard::get() as $s) {
                $scoreboards = Scoreboard::where('user_id', '!=', $u->id)->first();
                $scoreboards->delete();
            }
        }
    }
}
