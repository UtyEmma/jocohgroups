<?php

namespace App\Tables\Columns;

use Filament\Tables\Columns\TextColumn;

class StatusColumn extends TextColumn {

    function getState(): mixed {
        $record = $this->record[$this->name];
        $this->badge();
        $this->color($record->color());
        return $record->label();
    }

}
