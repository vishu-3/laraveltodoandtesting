<?php

namespace App;

use App\Exceptions\MinorCannotBuyalcholicBeverageException;
use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    public function buy()
    {
        if (auth()->user()->isMinor()) {
            throw new MinorCannotBuyalcholicBeverageException();
        }
        return true;
    }
}
