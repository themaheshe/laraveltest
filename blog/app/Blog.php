<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
   use SoftDeletes; 
   protected $table = 'blog';
   protected $dates = ['updated_date','deleted_at'];
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
        'title', 'body', 'active','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

   

   
   
  

}








