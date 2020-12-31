<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use Notifiable,
        SoftDeletes;
    protected $table = 'shop';
    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
        'deleted_at' => 'date:Y-m-d H:i:s',
    ];
    protected $fillable = [
        "id",
        "name",
        "company_id",
        "postal_cd",
        "prefecture",
        "city",
        "address",
        "tel",
        "email",
        "opening_time",
        "closing_time",
        "time_break",
    ];
}
