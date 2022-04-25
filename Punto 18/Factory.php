<?php
class UserFactory {
  private static $user_registration = 2021;

  public static function create($name,$email) {
    return new User($name,$email, self::$user_registration);
  }
}

$agustin = UserFactory::create('Agustin Baigorria','agustin..@hot..'); 