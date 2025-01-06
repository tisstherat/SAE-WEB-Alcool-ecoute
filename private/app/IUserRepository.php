<?php

namespace Gestion\AlcoolEcoute;

interface IUserRepository {
  public function saveUser(User $user): bool;
  public function findUserByEmail(string $email): ?User;
  public function saveEnquete(Enquete $enquete): bool;
  public function isSubmitById(string $id): bool;
  public function isAdminById(string $id): bool;
}