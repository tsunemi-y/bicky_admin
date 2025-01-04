<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'parentName',
        'email',
        'tel',
        'childName',
        'age',
        'gender',
        'diagnosis',
        'childName2',
        'age2',
        'gender2',
        'diagnosis2',
        'address',
        'introduction',
        'coursePlan',
        'consaltation',
        'fee',
        'userAgent',
        'use_time',
        'parent_name_kana',
        'child_name_kana',
        'child_name2_kana',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
