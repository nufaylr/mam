<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppList extends Model
{
    protected $table = 'app_lists';

    public function getAppType() {
       // return $this->belongsTo('App\AppType', 'app_type_id');
       // return $this->belongsToMany('App\AppList');
    	//App\AppList::
    	return $this->hasManyThrough('App\Apps', 'App\AppType');
    }

    public function getAppList() {
        return $this->belongsTo('App\Apps', 'app_id');
    }
}
