<?php

namespace App\Enums;

enum Roles:string {

    case ADMIN = 'admin';
    case SUPERADMIN = 'super_admin';
    case EDITOR = 'editor';
    case AUTHOR = 'author';
    case SUBSCRIBER = 'subscriber';

    function label(){
        return match($this) {
            static::ADMIN => 'Administrator',
            static::SUPERADMIN => 'Super Administrator',
            static::AUTHOR => 'Author',
            static::EDITOR => 'Editor',
            static::SUBSCRIBER => 'Subscriber',
        };
    }
    
    static function options(){
        return [
            static::ADMIN->value => self::ADMIN->label(),
            static::SUPERADMIN->value => self::SUPERADMIN->label(),
            // static::AUTHOR->value => self::AUTHOR->label(),
            // static::EDITOR->value => self::EDITOR->label(),
            // static::SUBSCRIBER->value => self::SUBSCRIBER->label(),
        ];
    }

    function isAdmin(){
        return in_array($this, [static::ADMIN, static::SUPERADMIN]);
    }

    function isSuperAdmin(){
        return $this == static::SUPERADMIN;
    }

}
