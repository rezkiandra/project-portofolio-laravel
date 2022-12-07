<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metadata extends Model
{
    use HasFactory;
    protected $table = "metadata";
    protected $fillable = ['meta_key', 'meta_value'];

    public function getTglMulaiIndoAttribute()
    {
        if ($this->attributes['_tgl_lahir']) {
            return Carbon::parse($this->attributes['_tgl_lahir'])->translatedFormat('d F Y');
        }
    }
}