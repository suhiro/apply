<?php

namespace App\Listeners;

use App\Events\ApplicantApplied;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicantAppliedNotificationEmail;
use App\Mail\ApplicantEmail;

class ApplicantAppliedListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ApplicantApplied  $event
     * @return void
     */
    public function handle(ApplicantApplied $event)
    {
        Mail::to('haga.gu@magicnoodle.ca')->cc(['suhiro@gmail.com','elaine.mei@magicnoodle.ca'])->send(
            new ApplicantAppliedNotificationEmail($event->applicant)
        );
        Mail::to($event->applicant)->send(new ApplicantEmail($event->applicant));
    }
}
