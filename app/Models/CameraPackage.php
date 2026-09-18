<?php

namespace App\Models;

use Database\Factories\CameraPackageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CameraPackage extends Model
{
    /** @use HasFactory<CameraPackageFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'slug',
        'camera_count',
        'camera_type',
        'resolution',
        'storage_info',
        'equipment_price',
        'installation_price',
        'total_price',
        'badge',
        'features',
        'is_popular',
        'order',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'features' => 'array',
            'is_popular' => 'boolean',
            'equipment_price' => 'decimal:2',
            'installation_price' => 'decimal:2',
            'total_price' => 'decimal:2',
        ];
    }

    /**
     * Formatted total price in Turkish Lira format.
     */
    public function formattedTotalPrice(): string
    {
        return number_format((float) $this->total_price, 0, ',', '.').' ₺';
    }

    /**
     * Formatted equipment price in Turkish Lira format.
     */
    public function formattedEquipmentPrice(): string
    {
        return number_format((float) $this->equipment_price, 0, ',', '.').' ₺';
    }

    /**
     * Formatted installation price in Turkish Lira format.
     */
    public function formattedInstallationPrice(): string
    {
        return number_format((float) $this->installation_price, 0, ',', '.').' ₺';
    }
}
