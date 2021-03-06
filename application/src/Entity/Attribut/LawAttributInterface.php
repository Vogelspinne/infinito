<?php

namespace App\Entity\Attribut;

use App\Entity\Meta\LawInterface;

/**
 * @author kevinfrantz
 */
interface LawAttributInterface
{
    public function setLaw(LawInterface $law): void;

    public function getLaw(): LawInterface;
}
