<?php
/**
 * This file is part of Ihsan Product
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Product;

interface VendorInterface
{
    public function getCode();

    public function getName();

    public function getProducts();

    public function getCompany();
}