<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
   public function seasons(){
       return $this->HasMany(\App\Season::class);
   }
}
