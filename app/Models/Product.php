<?php

namespace App\Models;

use App\Traits\RecordSignature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements Auditable,HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use RecordSignature;

    protected $fillable = [
        'name', 'detail'
    ];

}
