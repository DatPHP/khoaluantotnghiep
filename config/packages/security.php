<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/8/2018
 * Time: 2:03 PM
 */

// config/packages/security.php
use App\Entity\Users;

$container->loadFromExtension('security', array(
    'encoders' => array(
        Users::class => 'bcrypt',
    ),
));










