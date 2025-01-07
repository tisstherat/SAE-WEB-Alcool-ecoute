<?php

namespace Gestion\AlcoolEcoute;

interface IUserRepository {
  public function saveUser(User $user): bool;
  public function findUserByEmail(string $email): ?User;
  public function getIdByEmail(string $email): int;
  public function saveEnquete(Enquete $enquete): bool;
  public function isSubmitById(int $id): bool;
  public function isAdminById(int $id): bool;
}