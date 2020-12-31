<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use Notifiable,
        SoftDeletes;
    protected $table = 'companies';
    protected $hidden = ['created_at'];
    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
    ];
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'name', 'postal_cd', 'prefecture', 'city', 'area', 'address'];
    public function shops()
    {
        return $this->hasMany('App\Models\Shop','company_id','id');
    }


}
