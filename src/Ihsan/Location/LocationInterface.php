<?php
/**
 * This file is part of Ihsan Location
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Location;

interface LocationInterface
{
    public function setParent(LocationInterface $location);

    public function getParent();

    public function getName();

    public function getCode();
}