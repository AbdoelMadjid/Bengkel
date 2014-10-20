<?php
/**
 * This file is part of Ihsan Payment
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Payment;

interface PaymentPolicyInterface
{
    /**
     * Tanggal Jatuh Tempo Pembayaran Terdekat
     *
     * @return \DateTime
     **/
    public function getPaymentDue();

    public function getPaymentMethod();
}