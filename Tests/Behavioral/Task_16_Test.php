<?php

namespace Test;
require_once "./Behavioral/Task_16/AuthenticationService.php";

use Behavioral\Specification\Task16\User;
use Behavioral\Specification\Task16\AccountStatusSpecification;
use Behavioral\Specification\Task16\AuthenticationService;
use Behavioral\Specification\Task16\EmailVerificationSpecification;
use Behavioral\Specification\Task16\RoleSpecification;
use PHPUnit\Framework\TestCase;

class Task_16_Test extends TestCase
{
    public function testAuthentication()
    {
        $user = new User("John", "Doe@dd", "Admin");

        $emailVerification = new EmailVerificationSpecification("Doe@dd");
        $accountStatus = new AccountStatusSpecification(true);
        $role = new RoleSpecification("Admin");

        $authenticationService = new AuthenticationService();

        $authenticationService->authenticate($user, $emailVerification, $accountStatus, $role);
        $test = $authenticationService->isUserAuthenticated($user);
        $this->assertTrue($test);
    }
}
