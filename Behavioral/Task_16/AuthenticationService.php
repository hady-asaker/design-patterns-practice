<?php

namespace Behavioral\Specification\Task16;
require_once "User.php";
require_once "AccountStatusSpecification.php";
require_once "EmailVerificationSpecification.php";
require_once "RoleSpecification.php";

class AuthenticationService
{
    private User $user;
    private bool $isAuthenticate = false;

    public function authenticate(User $user, EmailVerificationSpecification $email, AccountStatusSpecification $status, RoleSpecification $role)
    {
        $this->user = $user;

        if (
            $email->isSatisfiedBy($this->user) &&
            $status->isSatisfiedBy($this->user) &&
            $role->isSatisfiedBy($this->user)
        ) {
            $this->isAuthenticate = true;
        }
    }

    public function isUserAuthenticated(User $user): bool
    {
        return $this->isAuthenticate;
    }
}


$user = new User("John", "Doe@dd", "admin");

$emailVerification = new EmailVerificationSpecification("Doe@dd");
$accountStatus = new AccountStatusSpecification(1);
$role = new RoleSpecification("Admin");

$authenticationService = new AuthenticationService();

$authenticationService->authenticate($user, $emailVerification, $accountStatus, $role);
echo ($authenticationService->isUserAuthenticated($user) ? "User is authenticated" : "User is not authenticated");
