<?php

namespace Gestion\AlcoolEcoute;

class MariaDBUserRepository implements IUserRepository {

  public function __construct(private \PDO $dbConnexion) { }

  public function saveUser(User $user) : bool {
    $stmt = $this->dbConnexion->prepare(
      "INSERT INTO users (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)"
    );

    return $stmt->execute([
        "nom" => $user->getNom(),
        "prenom" => $user->getPrenom(),
        "email" => $user->getEmail(),
        'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT)
    ]);
  }

  public function findUserByEmail(string $email) : ?User {
    $stmt = $this->dbConnexion->prepare(
      "SELECT * FROM users WHERE email = :email"
    );
    $stmt->execute(['email' => $email]);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);

    if($result) {
      return new User($result['nom'],$result['prenom'],$result['email'], $result['password']);
    }
    return null;
  }

    public function saveEnquete(Enquete $enquete): bool
    {
        $stmt = $this->dbConnexion->prepare(
            "INSERT INTO enquete (id_users, age, region,emploi,lieu_de_vie,lieu_de_vie_CDAPH,lieu_de_vie_choix,besoin, besoinDetail) VALUES (:id_users, :age, :region, :emploi, :lieu_de_vie, :lieu_de_vie_CDAPH, :lieu_de_vie_choix, :besoin, :besoinDetail)"
        );

        return $stmt->execute([
            "id_users" => $enquete->getIdUsers(),
            "age" => $enquete->getAge(),
            "region" => $enquete->getRegion(),
            "emploi" => $enquete->getEmploi(),
            "lieu_de_vie" => $enquete->getLieuDeVie(),
            "lieu_de_vie_CDAPH" => $enquete->getLieuDeVieCDAPH(),
            "lieu_de_vie_choix" =>(int) $enquete->isLieuDeVieChoix(),
            "besoin" => $enquete->getBesoin(),
            "besoinDetail" => $enquete->getBesoinDetail()

        ]);
    }

    public function isSubmitById(int $id): bool
    {
        $sql = "SELECT * FROM enquete WHERE id_users = :id";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute(["id" => $id]);
        return (bool) $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function isAdminById(int $id): bool
    {
        $sql = "SELECT * FROM admin WHERE id_users = :id";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute(["id" => $id]);
        return (bool) $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getIdByEmail(string $email): int
    {
        $sql = "SELECT id FROM users WHERE email = :email";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute(["email" => $email]);
        $id = $stmt->fetch(\PDO::FETCH_ASSOC);
        return (int) $id['id'];
    }
}