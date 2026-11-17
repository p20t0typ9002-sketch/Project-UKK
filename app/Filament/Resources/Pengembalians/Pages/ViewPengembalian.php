<?php

namespace App\Filament\Resources\Pengembalians\Pages;

use App\Filament\Resources\Pengembalians\PengembalianResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPengembalian extends ViewRecord
{
    protected static string $resource = PengembalianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
