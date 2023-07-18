<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    protected $fillable = ['artisan_id','date_debut','date_fin','diplome','school_name','school_city','description'];
    public function artisan() {
        return $this->belongsTo(User::class);
    }
}
