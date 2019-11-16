<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Threat extends Model
{
    protected $fillable = ['name', 'description'];

    public function asset_types()
    {
        return $this->belongsToMany('App\AssetType', 'threat_asset_types');
    }
}
