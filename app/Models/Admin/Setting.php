<?php

namespace App\Models\Admin;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Setting extends Model
{
    use LogsActivity;

    protected $guarded = [];

    // Forget cache on updating or saving and deleting
    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            self::cacheKey();
        });

        static::deleting(function () {
            self::cacheKey();
        });
    }

    // Cache Keys
    private static function cacheKey()
    {
        Cache::has('settings') ? Cache::forget('settings') : '';
    }

    // Logs
    protected static $logName = 'setting';

    // Mutators
    public function getSettingGroupAttribute($value)
    {
        return ucwords(str_replace('_', ' ', $value));
    }

    // Accessors
    public function getSettingTypeAttribute($attribute)
    {
        return [
            1 => 'string',
            2 => 'integer',
            3 => 'text',
            4 => 'rich text',
            5 => 'switch',
            6 => 'checkbox',
            7 => 'select',
            8 => 'multiple',
            9 => 'tag',
            10 => 'image',
        ][$attribute];
    }
}
