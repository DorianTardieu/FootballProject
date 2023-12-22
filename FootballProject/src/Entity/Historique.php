<?php

namespace App\Entity;

use App\Repository\HistoriqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]
class Historique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_historique = null;

    #[ORM\Column]
    private ?int $id_match = null;

    public function getId($id_historique): ?int
    {
        return $this->$id_historique;
    }

    public function getIdMatch(): ?int
    {
        return $this->id_match;
    }

    public function setIdMatch(int $id_match): static
    {
        $this->id_match = $id_match;

        return $this;
    }
}
