<?php

namespace App\Entity\Attribut;

/**
 * @author kevinfrantz
 */
trait TypeAttribut
{
    /**
     * @var string
     */
    protected $type;

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
