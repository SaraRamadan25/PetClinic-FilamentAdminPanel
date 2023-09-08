<?php
namespace App\Enums;
enum PetType: string
{
    case Dog = 'dog';
    case Cat = 'cat';
    case Bird = 'bird';
    case Fish = 'fish';
    case Other = 'other';

    public function getLabel(): string
    {
        return match ($this) {
            self::Dog => 'Dog',
            self::Cat => 'Cat',
            self::Bird => 'Bird',
            self::Fish => 'Fish',
            self::Other => 'Other',
        };
    }
}
