<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendConfirmationMail;
use Illuminate\Support\Facades\Mail;

class SendConfirmationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-confirmation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to send confirmation email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        Mail::to('recipient@example.com')->queue(new SendConfirmationMail());
    }
}
