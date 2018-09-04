<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ReadOnlyBase;

class Title extends ReadOnlyBase
{
    //
    protected $title_array = ['Mr','Mrs','Ms','Dr','Mx'];
}
