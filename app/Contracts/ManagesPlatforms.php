<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ManagesPlatforms {

    function getPolicyModel() : Model;

}