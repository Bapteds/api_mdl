<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LicencieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\DBAL\Types\Types;

#[ApiResource(
    operations: [
        new Get(),
        new GetCollection()
    ]
)]

#[ORM\Table(name: "LICENCIE")]
#[ORM\Entity(repositoryClass: LicencieRepository::class)]
class Licencie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?int $id = null;

    #[ORM\Column(name: "numlicence", type: "integer", nullable: false)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?int $numlicence = null;

    #[ORM\Column(name: "nom", type: "string", nullable:false,length: 70)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $nom = null;

    #[ORM\Column( name: "prenom", type: "string", nullable:false,length: 70)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $prenom = null;

    #[ORM\Column(name: "adresse1", type: "string", nullable:false,length: 255)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $adresse1 = null;

    #[ORM\Column(name: "adresse2", type: "string", nullable:true,length: 255)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $adresse2 = null;

    #[ORM\Column(name: "cp", type: "integer", nullable:false,length: 6)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $cp = null;

    #[ORM\Column(name: "ville", type: "string", nullable:false,length: 70)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $ville = null;

    #[ORM\Column(name: "tel", type: "integer", nullable:false,length: 14)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $tel = null;

    #[ORM\Column(name: "mail", type: "string", nullable:false,length: 100)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $mail = null;

    #[ORM\Column(type: Types::DATE_MUTABLE,name: "dateadhesion", nullable:false)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?\DateTimeInterface $dateadhesion = null;

    //#[ORM\Column(name: "idlicencie", type: "integer", nullable:false)]
    //#[Groups(['licencie:list', 'licencie:item'])]
    //private ?string $idlicencie = null;

    #[ORM\Column(name: "idqualite", type: "integer", nullable:false)]
    #[Groups(['licencie:list', 'licencie:item'])]
    private ?string $idqualite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setID(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNumlicence(): ?int
    {
        return $this->numlicence;
    }

    public function setNumlicence(int $numlicence): static
    {
        $this->numlicence = $numlicence;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    public function setAdresse1(string $adresse1): static
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(?string $adresse2): static
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateadhesion(): ?\DateTimeInterface
    {
        return $this->dateadhesion;
    }

    public function setDateadhesion(\DateTimeInterface $dateadhesion): static
    {
        $this->dateadhesion = $dateadhesion;

        return $this;
    }
/*
    public function getIdlicencie(): ?string
    {
        return $this->idlicencie;
    }

    public function setIdlicencie(string $idlicencie): static
    {
        $this->idlicencie = $idlicencie;

        return $this;
    }
*/
    public function getIdqualite(): ?string
    {
        return $this->idqualite;
    }

    public function setIdqualite(string $idqualite): static
    {
        $this->idqualite = $idqualite;

        return $this;
    }
}
