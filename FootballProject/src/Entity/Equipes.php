<?php

namespace App\Entity;

use App\Repository\EquipesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipesRepository::class)]
class Equipes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_equipe = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_equipe = null;

    public function getId(): ?int
    {
        return $this->$id_equipe;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nom_equipe;
    }

    public function setNomEquipe(string $nom_equipe): static
    {
        $this->nom_equipe = $nom_equipe;

        return $this;
    }
}
