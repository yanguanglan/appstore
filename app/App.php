<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'apps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ids', 'name_chn', 'name_eng', 'thumb', 'screenshots', 'description', 'cid', 'platform', 'operation', 'tags', 'params', 'author', 'source', 'downloads', 'closed'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['closed'];
}