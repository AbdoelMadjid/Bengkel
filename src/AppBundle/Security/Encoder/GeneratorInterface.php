<?php
/**
 * This file is part of Bengkel
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace AppBundle\Security\Encoder;

interface GeneratorInterface
{
    /**
     * Generator to generate unique value
     *
     * DO NOT USE TIME BASE GENERATOR
     *
     * @param string $raw
     * @return string
     **/
    public function generate($raw);
}