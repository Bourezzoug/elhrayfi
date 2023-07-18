<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['artisan_id','date_debut','date_fin','titre','company_name','company_city','description'];
    public function artisan() {
        return $this->belongsTo(User::class);
    }
}
