<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Attribut\UserAttribut;
use App\Entity\Attribut\NameSourceAttribut;

/**
 * @author kevinfrantz
 * @ORM\Table(name="source_user")
 * @ORM\Entity(repositoryClass="App\Repository\UserSourceRepository")
 */
class UserSource extends AbstractSource implements UserSourceInterface
{
    use UserAttribut,NameSourceAttribut;

    /**
     * @ORM\OneToOne(targetEntity="User",cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *
     * @var User
     */
    protected $user;

    /**
     * @ORM\OneToOne(targetEntity="NameSource",cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="name_id", referencedColumnName="id")
     *
     * @var NameSourceInterface
     */
    protected $nameSource;

    public function __construct()
    {
        $this->nameSource = new NameSource();
        parent::__construct();
    }
}
