<?php

namespace App\Entity\Source;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Entity\Attribut\MembersAttributInterface;
use App\Entity\Attribut\MembersAttribut;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author kevinfrantz
 * @ORM\Table(name="source_group")
 * @ORM\Entity
 */
final class GroupSource extends AbstractSource implements MembersAttributInterface
{
    use MembersAttribut;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="AbstractSource",inversedBy="groups")
     * @ORM\JoinTable(name="source_group_members")
     */
    protected $members;

    public function __construct()
    {
        parent::__construct();
        $this->members = new ArrayCollection();
    }
}
