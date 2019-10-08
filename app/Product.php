<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    public function file()
    {
        return $this->hasOne('App\File', 'id', 'file_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'product_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Menu', 'sub_category_id', 'id');
    }

    public function getRating($product_id){
        $reviews = Review::where('product_id', $product_id)->get();
        $average = 0.0;
        if(count($reviews)>0){
            foreach($reviews as $review){
                $average += $review->rating;
            }
            $average /= $reviews->count();
            
        }
        return $average;
    }
}