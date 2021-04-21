<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected  $table = 'lists';

    protected  $fillable = ['ref_user','description'];
}
