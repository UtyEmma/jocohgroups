<?php

namespace App\Enums;

use App\Models\Platform;

enum Platforms:string {

    case GROUP = 'group';
    case FARMS = 'farms';
    case STORES = 'stores';

    function model(){
        return Platform::whereSlug($this)->first();
    }

    static function platform($name){
        return match ($name) {
            self::STORES->value => self::STORES,
            self::FARMS->value => self::FARMS,
            default => self::GROUP
        };
    }

    static function fromDomain($domain) {
        return match (true) {
            in_array($domain, [env('APP_GROUP_DOMAIN')]) => self::GROUP,
            in_array($domain, [env('APP_STORES_DOMAIN')]) => self::STORES,
            in_array($domain, [env('APP_FARMS_DOMAIN')]) => self::FARMS,
            default => self::GROUP
        };
    }

    function domain() {
        return match ($this) {
            self::GROUP => env('APP_GROUP_DOMAIN'),
            self::STORES => env('APP_STORES_DOMAIN'),
            self::FARMS => env('APP_FARMS_DOMAIN'),
        };
    }

    function label(){
        return match ($this) {
            self::GROUP => 'Jocoh Group',
            self::FARMS => 'Jocoh Farms',
            self::STORES => 'Jocoh Stores',
        };
    }

    static function options(){
        return [
            self::GROUP->value => self::GROUP->label(),
            self::FARMS->value => self::FARMS->label(),
            self::STORES->value => self::STORES->label(),
        ];
    }

} 