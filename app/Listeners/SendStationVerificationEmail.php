<?php

namespace App\Listeners;

use App\Events\StationRegistered;
use App\Mail\StationVerificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class SendStationVerificationEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StationRegistered $event): void
    {
        $station = $event->station;

        $signedUrl = URL::temporarySignedRoute('station.verify', now()->addMinutes(60), ['station' => $station->id]);
        Mail::to($station->email)->send(new StationVerificationMail($signedUrl));
    }
}