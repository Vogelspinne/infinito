<?php

namespace App\Entity\Meta;

use App\Entity\AbstractEntity;

/**
 * @author kevinfrantz
 */
abstract class AbstractMeta extends AbstractEntity implements MetaInterface
{
    public function __construct()
    {
        parent::__construct();
    }
}
