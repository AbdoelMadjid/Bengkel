<?php
/**
 * This file is part of Ihsan Company
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Company;

interface CompanyInterface
{
    public function getCode();

    public function getName();

    public function getContact();

    public function getPaymentPolicy();
}