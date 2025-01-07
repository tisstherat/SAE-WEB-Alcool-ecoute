<?php

namespace Gestion\AlcoolEcoute;

class Enquete
{
    public function __construct(private int $id_users, private int $age, private string $region, private string $emploi,private string $lieu_de_vie,private string $lieu_de_vie_CDAPH,private bool $lieu_de_vie_choix,private string $besoin,private string $besoinDetail)
    {}

    public function getIdUsers(): int
    {
        return $this->id_users;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getEmploi(): string
    {
        return $this->emploi;
    }

    public function getLieuDeVie(): string
    {
        return $this->lieu_de_vie;
    }

    public function getLieuDeVieCDAPH(): string
    {
        return $this->lieu_de_vie_CDAPH;
    }

    public function isLieuDeVieChoix(): bool
    {
        return $this->lieu_de_vie_choix;
    }

    public function getBesoin(): string
    {
        return $this->besoin;
    }

    public function getBesoinDetail(): string
    {
        return $this->besoinDetail;
    }


}