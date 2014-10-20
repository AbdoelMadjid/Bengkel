<?php
/**
 * This file is part of Ihsan Location
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Location;

interface StorableInterface
{
    public function setLocation(LocationInterface $location);

    public function getLocation();

    public function store();
}