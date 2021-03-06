<?php

namespace App\Entity\Source;

use App\Entity\Attribut\NameAttribut;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author kevinfrantz
 * @ORM\Table(name="source_name")
 * @ORM\Entity(repositoryClass="App\Repository\NameSourceRepository")
 */
final class NameSource extends AbstractSource implements NameSourceInterface
{
    use NameAttribut;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     *
     * @var string
     */
    protected $name;

    public function __construct()
    {
        parent::__construct();
        $this->name = '';
    }
}
