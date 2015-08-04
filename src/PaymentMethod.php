<?php namespace Vindi;

class PaymentMethod extends Resource
{
    /**
     * The endpoint that will hit the API.
     *
     * @return string
     */
    public function endpoint()
    {
        return 'payment_methods';
    }
}