<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
 	protected $dates = ['release_date'];

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;

    	if (! $this->exists) {
    		$this->attributes['slug']= str_slug($value);
    	}
    }

    protected $fillable = [
    	'title',
    	'synopsis',
    	'image',
    	'release_date',
    	'director',
    	'writer'
    ];
}
