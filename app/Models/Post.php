<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * @package App\Models
 */
class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $fillable = ['title', 'author', 'description','content','image'];

    /**
     * @param $value
     */

}
