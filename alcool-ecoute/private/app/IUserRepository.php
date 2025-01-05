<?php

namespace Gestion\AlcoolEcoute;

interface IUserRepository {
  public function saveUser(User $user): bool;
  public function findUserByEmail(string $email): ?User;
}