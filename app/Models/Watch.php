<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class Watch extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'model',
        'reference',
        'collection',
        'price',
        'description',
        'features',
        'is_limited',
        'limited_pieces',
        'photo',
        'additional_photos',
    ];

    /**
     * Les attributs qui doivent être convertis.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'decimal:2',
        'is_limited' => 'boolean',
        'limited_pieces' => 'integer',
    ];

    /**
     * Obtenir un tableau des caractéristiques.
     *
     * @return array
     */
    public function getFeatureListAttribute()
    {
        if (empty($this->features)) {
            return [];
        }
        
        return explode("\n", $this->features);
    }

    /**
     * Obtenir un tableau des chemins d'images supplémentaires.
     *
     * @return array
     */
    public function getAdditionalPhotosArrayAttribute()
    {
        if (empty($this->additional_photos)) {
            return [];
        }
        
        return json_decode($this->additional_photos, true);
    }
}