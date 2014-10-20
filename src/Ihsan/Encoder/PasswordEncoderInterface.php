<?php
/**
 * This file is part of Ihsan Encoder
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace Ihsan\Encoder;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface as BaseEncoder;

interface PasswordEncoderInterface extends BaseEncoder
{
    /**
     * Generate salt from plain password
     *
     * @param string $plainPassword
     * @return string
     **/
    public function generateSalt($plainPassword);
}