<?php

namespace App\Models;

use Database\Factories\LeadFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /** @use HasFactory<LeadFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'phone',
        'district',
        'property_type',
        'camera_count',
        'estimated_budget',
        'message',
        'source',
        'status',
        'ip_address',
    ];

    /**
     * Scope a query to only include new leads.
     *
     * @param  Builder<Lead>  $query
     * @return Builder<Lead>
     */
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }
}
