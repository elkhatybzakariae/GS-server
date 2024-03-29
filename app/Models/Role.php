<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id_R';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = ['id_R','role_name','AccessBO','AccessPOS'];
    public function users()
    {
        return $this->hasMany(User::class,'id_R');
    }
}
