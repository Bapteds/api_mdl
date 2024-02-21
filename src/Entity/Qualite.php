<?php

namespace App\Entity;

use App\Repository\QualiteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\DBAL\Types\Types;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource(
    operations: [
        new Get(),
        new GetCollection()
    ]
)]

#[ORM\Table(name: "QUALITE")]
#[ORM\Entity(repositoryClass: QualiteRepository::class)]
class Qualite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id',type:'integer', nullable:false)]
    #[Groups(['qualite:list', 'qualite:item'])]
    private ?int $id = null;

    #[ORM\Column(name: "libellequalite", type: "string", nullable:false,length: 100)]
    #[Groups(['qualite:list', 'qualite:item'])]
    private ?string $libellequalite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellequalite(): ?string
    {
        return $this->libellequalite;
    }

    public function setLibellequalite(string $libellequalite): static
    {
        $this->libellequalite = $libellequalite;

        return $this;
    }
}
