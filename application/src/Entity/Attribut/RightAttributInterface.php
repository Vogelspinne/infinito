<?php

namespace App\Entity\Attribut;

use App\Entity\Meta\RightInterface;

/**
 * @author kevinfrantz
 */
interface RightAttributInterface
{
    public function setRight(RightInterface $right): void;

    public function getRight(): RightInterface;
}
