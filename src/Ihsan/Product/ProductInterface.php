<?php
/**
 * This file is part of Ihsan Product
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Product;

interface Product
{
    public function getCode();

    public function getName();

    /**
     * Product Name + Vendor Name
     *
     * @return string
     **/
    public function getCanonicalName();

    public function getPrice();

    public function getStock();

    /**
     * Get Locations of Product
     *
     * @return array
     **/
    public function getStorage();

    public function getVendor();
}