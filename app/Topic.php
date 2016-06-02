<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    public function chapters() {
        return $this->hasMany('Chapter');
    }
}
