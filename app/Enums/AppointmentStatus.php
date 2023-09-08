<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum AppointmentStatus: string implements HasLabel, HasColor
{
    case Created = 'created';
    case Confirmed = 'confirmed';
    case Canceled = 'canceled';
    case Completed = 'completed';

    public function getLabel(): string
    {
        return match ($this) {
            self::Created => 'Created',
            self::Confirmed => 'Confirmed',
            self::Canceled => 'Canceled',
            self::Completed => 'Completed', // Provide a valid label for Completed
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Created => 'warning',
            self::Confirmed => 'success',
            self::Canceled => 'danger',
            self::Completed => 'info', // Provide a valid color code for Completed
        };
    }
}
