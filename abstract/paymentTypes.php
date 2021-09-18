<?php

abstract class Visa
{
    public function visaPayment(){
        return "Perform payemnt";
    }

    abstract public function getPayment();
}