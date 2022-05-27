<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Jobs\UserPolicyExpiredJob;
use App\Models\User;

class EmailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Call cron job to send the email';

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
        $userEmail = User::find(1); 
        $array= json_decode(json_encode($userEmail),true);
        if(count($array)>0){
            UserPolicyExpiredJob::dispatch($array["email"]);
            return "Email is sent";
         }
         else{
             echo "We didn't get user email to ";
         }
    }
}
