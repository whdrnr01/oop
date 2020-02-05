<?php

abstract class Visa  
{
    public function visaPayment()
    {
        return "This is Visa Payment.";
    }

    abstract public function getPayment();
}
