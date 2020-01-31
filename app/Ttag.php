<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
	'post' => 'App\Tpost',
	'video' => 'App\Tvideo',
]);

class Ttag extends Model
{
    //
}
