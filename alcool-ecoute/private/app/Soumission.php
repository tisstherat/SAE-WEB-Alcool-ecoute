<?php

namespace Gestion\AlcoolEcoute;

class Soumission
{
    public function __construct(private IUserRepository $userRepository)
    {
    }

    public function submit(int $id_users, int $age, string $region, string $emploi, string $lieu_de_vie, string $lieu_de_vie_CDAPH, bool $lieu_de_vie_choix, string $besoin, string $besoinDetail): bool
    {
        $enquete = new Enquete($id_users, $age, $region, $emploi, $lieu_de_vie, $lieu_de_vie_CDAPH, $lieu_de_vie_choix, $besoin, $besoinDetail);
        return $this->userRepository->saveEnquete($enquete);
    }
}