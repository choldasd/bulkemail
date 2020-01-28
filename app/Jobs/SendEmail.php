<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\EmailForQueuing;
use Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	
	protected $email;
	
	/**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 2;
	
	/**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    public $timeout = 200;
	
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        //
		$this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
		$email_template = new EmailForQueuing();
		$abc = Mail::to($this->email)->send($email_template);
		
    }
}
