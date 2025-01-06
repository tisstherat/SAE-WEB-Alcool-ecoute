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
        // TODO: Implement saveEnquete() method.
    }

    public function isSubmitById(string $id): bool
    {
        // TODO: Implement isSubmitById() method.
    }

    public function isAdminById(string $id): bool
    {
        // TODO: Implement isAdminById() method.
    }
}