<?php
/**
 * User: asier
 * Date: 7/01/14
 * Time: 18:33
 */

namespace Tomsaver\Service;


use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Tomsaver\Entity\User;

class UserProvider implements UserProviderInterface
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function loadUserByUsername($username)
    {
        $user = new User(0, $username, 'lala');
        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "$s" are not supported', get_class($user)));
        }
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class == 'Symfony\Component\Security\Core\User\User';
    }

} 