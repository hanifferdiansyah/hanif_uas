<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nm_member',
        'alamat_member',
        'noHp_member',
        'no_kartuMember',
    ];

    public function pendaftaran()
    {
        return $this->hasOne(Pendaftaran::class, 'no_kartuMember', 'no_kartuMember');
    }



}
