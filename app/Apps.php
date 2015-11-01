<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apps extends Model
{
    public $table = 'apps';

    public function getAppType() {
        return $this->belongsToMany('App\Types');
    }
}
