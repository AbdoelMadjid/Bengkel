<?php
/**
 * This file is part of Ihsan Payment
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Payment;

interface PaymentMethodInterface
{
    public function getCode();

    public function getName();
}