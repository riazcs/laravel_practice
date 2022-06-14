<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        info("Cron job running at :". now());
        $user = User::first();
        if($user->delete()){
            info("Deleted");
        }
        // $response = Http::get('https://jsonplaceholder.typicode.com/users');
        // $users = $response->json();

        // if(!empty($users)){
        //     foreach($users as $key => $user){
        //         if(!User::where('email', $user['email'])->exists()){
        //             User::create([
        //                 'name' => $user['name'],
        //                 'email' => $user['email'],
        //                 'password' => bcrypt('123456')
        //             ]);
        //         }
        //     }
        // }
        return 0;
    }
}
