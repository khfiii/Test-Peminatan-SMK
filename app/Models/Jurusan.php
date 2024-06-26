<?php

namespace App\Models;

use App\Models\Soal;
use App\Observers\JurusanObserver;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['kode_jurusan', 'nama_jurusan'];


    public function soals(): BelongsToMany
    {
        return $this->belongsToMany(Soal::class);
    }
}
