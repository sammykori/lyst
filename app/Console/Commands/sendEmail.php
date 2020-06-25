<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use Illuminate\Support\Facades\Notification;
use App\Dealers;
use App\User;
use App\Notifications\RenewalNotify;

class sendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email to user';

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
     * @return mixed
     */
    public function handle()
    {
        $dates = Dealers::all();
        foreach($dates as $dates){
            $date = $dates->expiry_date;
            $time_input = date_create_from_format("Y-m-j",$date);
            // date_sub($time_input, date_interval_create_from_date_string("4 months"));
            $temp=date_format($time_input, "Y-m-d");
            echo $temp;
            echo $date;
            if($date == $temp){
                $users=User::all();
                Notification::send($users, new RenewalNotify($dates));
            }
        }

    }
}
