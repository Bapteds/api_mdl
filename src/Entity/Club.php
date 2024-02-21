<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;


#[ApiResource(
    operations: [
        new Get(),
        new GetCollection()
    ]
)]
#[ORM\Table(name: "CLUB")]
#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    private $id;

    #[ORM\Column(name: "nom", type: "string", length: 50, nullable: false)]
    #[Groups(['club:list', 'club:item'])]
    private $nom;

    #[ORM\Column(name: "adresse1", type: "string", length: 60, nullable: false)]
    #[Groups(['club:list', 'club:item'])]
    private $adresse1;

    #[ORM\Column(name: "adresse2", type: "string", length: 60, nullable: true)]
    #[Groups(['club:list', 'club:item'])]
    private $adresse2;

    #[ORM\Column(name: "cp", type: "string", length: 5, nullable: false, options: ["fixed" => true])]
    #[Groups(['club:list', 'club:item'])]
    private $cp;

    #[ORM\Column(name: "ville", type: "string", length: 60, nullable: false)]
    #[Groups(['club:list', 'club:item'])]
    private $ville;

    #[ORM\Column(name: "tel", type: "string", length: 14, nullable: false, options: ["fixed" => true])]
    #[Groups(['club:list', 'club:item'])]
    private $tel;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }
    public function setAdresse1(string $adresse1): self
    {
        $this->adresse1 = $adresse1;
        return $this;
    }
    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }
    public function setAdresse2(?string $adresse2): self
    {
        $this->adresse2 = $adresse2;
        return $this;
    }
    public function getCp(): ?string
    {
        return $this->cp;
    }
    public function setCp(string $cp): self
    {
        $this->cp = $cp;
        return $this;
    }
    public function getVille(): ?string
    {
        return $this->ville;
    }
    public function setVille(string $ville): self
    {
        $this->ville = $ville;
        return $this;
    }
    public function getTel(): ?string
    {
        return $this->tel;
    }
    public function setTel(string $tel): self
    {
        $this->tel = $tel;
        return $this;
    }
}
