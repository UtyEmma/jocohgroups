<?php

namespace App\Concerns;

use App\Enums\Status;

trait HasStatus {

    function initializeHasStatus() {
        $this->mergeCasts([
            'status' => Status::class
        ]);

        $this->mergeAttributes([
            'status' => Status::ACTIVE
        ]);

        $this->mergeFillables(['status']);
    }

}