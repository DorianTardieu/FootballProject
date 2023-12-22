<?php

namespace App\Entity;

use App\Repository\MatchsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatchsRepository::class)]
class Matchs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_match = null;

    #[ORM\Column]
    private ?int $id_equipe_1 = null;

    #[ORM\Column]
    private ?int $id_equipe_2 = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetime_match = null;

    #[ORM\Column]
    private ?int $score_equipe_1 = null;

    #[ORM\Column]
    private ?int $score_equipe_2 = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $minute_but_equipe_1 = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $minute_but_equipe_2 = null;

    public function getId(): ?int
    {
        return $this->$id_match;
    }

    public function getIdEquipe1(): ?int
    {
        return $this->id_equipe_1;
    }

    public function setIdEquipe1(int $id_equipe_1): static
    {
        $this->id_equipe_1 = $id_equipe_1;

        return $this;
    }

    public function getIdEquipe2(): ?int
    {
        return $this->id_equipe_2;
    }

    public function setIdEquipe2(int $id_equipe_2): static
    {
        $this->id_equipe_2 = $id_equipe_2;

        return $this;
    }

    public function getDatetimeMatch(): ?\DateTimeInterface
    {
        return $this->datetime_match;
    }

    public function setDatetimeMatch(\DateTimeInterface $datetime_match): static
    {
        $this->datetime_match = $datetime_match;

        return $this;
    }

    public function getScoreEquipe1(): ?int
    {
        return $this->score_equipe_1;
    }

    public function setScoreEquipe1(int $score_equipe_1): static
    {
        $this->score_equipe_1 = $score_equipe_1;

        return $this;
    }

    public function getScoreEquipe2(): ?int
    {
        return $this->score_equipe_2;
    }

    public function setScoreEquipe2(int $score_equipe_2): static
    {
        $this->score_equipe_2 = $score_equipe_2;

        return $this;
    }

    public function getMinuteButEquipe1(): ?\DateTimeInterface
    {
        return $this->minute_but_equipe_1;
    }

    public function setMinuteButEquipe1(?\DateTimeInterface $minute_but_equipe_1): static
    {
        $this->minute_but_equipe_1 = $minute_but_equipe_1;

        return $this;
    }

    public function getMinuteButEquipe2(): ?\DateTimeInterface
    {
        return $this->minute_but_equipe_2;
    }

    public function setMinuteButEquipe2(?\DateTimeInterface $minute_but_equipe_2): static
    {
        $this->minute_but_equipe_2 = $minute_but_equipe_2;

        return $this;
    }
}
