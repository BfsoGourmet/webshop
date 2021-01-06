<?php

namespace App\Listeners;

use App\Events\PriceReduction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SpecialPriceLog
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
     * @param  PriceReduction  $event
     * @return void
     */
    public function handle(PriceReduction $event)
    {
        if ($event->product->special_price && $event->product->special_price < $event->product->price) {
            Log::channel('single')->debug("price reduction");
        }
    }
}
