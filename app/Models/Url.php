<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Url extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'urls';

    /**
     * @var string[]
     */
    protected $fillable = [
        'original_url',
        'short_url',
        'short_url_token',
        'allow_visit',
        'disabled_at'
    ];

    /**
     * @return HasMany
     */
    public function visits(): HasMany
    {
        return $this->hasMany(UrlVisit::class);
    }

}
