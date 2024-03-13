<?php

namespace Alquemie\composer;

use Symfony\Component\Filesystem\Filesystem;

class SyncHandler
{

  public static function sourceFiles() {
    $fs = new Filesystem();
    $root = getcwd();

    if (!$fs->exists($root . '/public/wp-content')) {
      $fs->mkdir($root . '/public/wp-content');
    }

    $fs->mirror($root . '/src/wp-content', $root . '/public/wp-content');

    if (!$fs->exists($root . '/public/root')) {
      $fs->mkdir($root . '/public/root');
    }
    
    $fs->mirror($root . '/src/root', $root . '/public/root');
  }
  
  public static function lastUpdated() {
    $entry = date('l | jS \of F Y h:i:s A', time())."\n";
    $root = getcwd();
    file_put_contents($root . '/src/root/.gitkeep', $entry); 
  }
  
  public static function addBcryptPwd() {
    $fs = new Filesystem();
    $root = getcwd();
    
    if ($fs->exists($root . '/vendor/roots/wp-password-bcrypt')) {
      $fs->copy($root . '/vendor/roots/wp-password-bcrypt/wp-password-bcrypt.php', $root . '/public/wp-content/mu-plugins/wp-password-bcrypt.php');
    }
  }
  
}
