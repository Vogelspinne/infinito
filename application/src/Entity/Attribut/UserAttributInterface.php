<?php

namespace App\Entity\Attribut;

use App\Entity\UserInterface;

/**
 * @author kevinfrantz
 */
interface UserAttributInterface
{
    public function setUser(UserInterface $user): void;

    public function getUser(): UserInterface;
}
