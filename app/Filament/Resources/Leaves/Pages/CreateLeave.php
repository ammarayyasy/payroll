<?php

namespace App\Filament\Resources\Leaves\Pages;

use App\Filament\Resources\Leaves\LeaveResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateLeave extends CreateRecord
{
    protected static string $resource = LeaveResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['status'])) {
            $data['status'] = 'pending';
        }

        if (empty($data['user_id'])) {
            $data['user_id'] = Auth::id();
        }

        if (empty($data['notes'])) {
            $data['notes'] = '-';
        }

        return $data;
    }
}
