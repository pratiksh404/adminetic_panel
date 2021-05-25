<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Attribute Casting
    protected $casts = [
        'phone_no' => 'array'
    ];

    // Accessors
    public function getStatusAttribute($attribute)
    {
        return [
            1 => 'Active',
            2 => 'Inactive',
            3 => 'Blocked'
        ][$attribute];
    }

    public function getGenderAttribute($attribute)
    {
        return [
            1 => 'Male',
            2 => 'Female',
            3 => 'Other'
        ][$attribute];
    }

    public function getBloodGroupAttribute($attribute)
    {
        return [
            1 => 'A',
            2 => 'B',
            3 => 'A+',
            4 => 'B+',
            5 => 'AB',
            6 => 'AB+',
            7 => 'O+',
            8 => 'O-',
        ][$attribute];
    }

    public function getMartialStatusAttribute($attribute)
    {
        return [
            1 => 'Married',
            2 => 'Unmarried',
            3 => 'Divorced',
            4 => 'Widowed',
        ][$attribute];
    }

    // Relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
