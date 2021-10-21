<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;
    protected $table='contests';
    protected $fillable = [
    'name', 'topic_id', 'image', 'description','start_date','end_date','status'
];
public function topic(){
  return $this->belongsTo(Contest::class,'topic_id','id');
}
}
