<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'tgl',
        'ket_pembayaran',
        'no_kartuMember',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'no_kartuMember', 'no_kartuMember');
    }



}
