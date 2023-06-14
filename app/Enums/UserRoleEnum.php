<?php

namespace App\Enums;

enum UserRoleEnum: string
{

    case USER = 'user';

    case ROOT = 'root';

    case ADMIN = 'admin';
}