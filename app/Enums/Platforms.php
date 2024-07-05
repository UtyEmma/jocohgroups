<?php

namespace App\Enums;

enum Platforms:string {

    case GROUP = 'group';
    case FARMS = 'farms';
    case STORES = 'stores';

    function label(){
        return match ($this) {
            self::GROUP => 'Jocoh Group',
            self::FARMS => 'Jocoh Farms',
            self::STORES => 'Jocoh Stores',
        };
    }

    

} 