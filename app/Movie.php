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
    	'image',
        'synopsis',
    	'release_date',
    	'director',
    	'writer_1',
        'actor_1',
        'rating',
        'category'
    ];
// FIND A WAY TO MAKE THIS WORK TO BE DRY 
    // public function scopeSearch($query, $search) 
    // {
    //     return $query->where('title', 'LIKE', "%$search%");
    //         // ->orwhere('synopsis', 'LIKE', "%$query%")
    //         // ->orwhere('director', 'LIKE', "%$query%")
    //         // ->orwhere('writer_1', 'LIKE', "%$query%")
    //         // ->orwhere('writer_2', 'LIKE', "%$query%")
    //         // ->orwhere('actor_1', 'LIKE', "%$query%")
    //         // ->orwhere('actor_2', 'LIKE', "%$query%")
    //         // ->orwhere('actor_3', 'LIKE', "%$query%")
    //         // ->orwhere('categories', 'LIKE', "%$query%");
        
    // }
}
