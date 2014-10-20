<?php
/**
 * This file is part of Ihsan Contact
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Contact;

interface ContactInterface
{
    public function getName();

    public function getPhoneNumber();

    public function getFaxNumber();

    public function getEmail();

    public function getWebsite();
}