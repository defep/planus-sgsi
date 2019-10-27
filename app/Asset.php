<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = ['name', 'asset_type_id', 'description'];

    public function type()
    {
        return $this->hasOne('App\AssetType', 'id', 'asset_type_id');
    }
}
