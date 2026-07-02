<?php

namespace Zerp\Paypal\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\LaundryManagement\Models\LaundryRequest;

class LaundryBookingPaymentPaypal
{
    use Dispatchable;

    public function __construct(
        public LaundryRequest $booking
    ) {}
}
