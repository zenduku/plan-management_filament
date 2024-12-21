<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modalHeading('Crear Nuevo Usuario')
                ->modalWidth('xl')
                ->modalAlignment('center')
                ->modalDescription('Complete el formulario para crear un nuevo usuario')
                ->modalIcon('heroicon-o-user-plus')
                ->label('Nuevo Usuario')  // Cambiado de buttonLabel a label
                ->color('primary')
                ->closeModalByClickingAway(false)
        ];
    }
}
