<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Module;


class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable =[
        'user_id',
        'company_id',
        'module_id',
        'status',
    ];
         public function module(): BelongsTo
        {
            return $this->belongsTo(Module::class, 'company_id',  'id');
        }


}
