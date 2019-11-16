<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetType extends Model
{
    public function threats()
    {
        return $this->belongsToMany('App\Threat', 'threat_asset_types');
    }
}
