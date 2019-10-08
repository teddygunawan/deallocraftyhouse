<?php
namespace App\Http\Controllers;
 
use App\Product;
use App\Review;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
 
class ProductController extends Controller
{
 
    public function index(){
        $products = Product::with('file')->get();
        return view('admin.products',['products' => $products]);
    }

    public function getProductID($productID){
        $product = Product::find($productID);
        $reviews = Review::where('product_id', '=', $productID)->get();
        $totalRating = 0;
        if($reviews->count() >0){
            foreach($reviews as $review){
                $totalRating += $review->rating;
            }
            $totalRating /= $reviews->count();
        }
        return view('main.productDetail', compact('product', 'reviews', 'totalRating'));
    }

    public function searchProduct(){
        $item = Input::input('search');
        $products = Product::where('name', 'LIKE', '%' .$item. '%')->orWhere('description', 'LIKE', '%' .$item. '%')->get();
        $category = null;
        return view('main.category', compact('category','products'));
    }

    public function addReview($productID){
        $product = Product::find($productID);
        $alreadyReview = Review::where('product_id', '=', $productID)->where('user_id', '=', Auth::user()->id)->first();
        if(empty($alreadyReview)){
            $review = new Review();
            $review->product_id = $productID;
            $review->user_id = Auth::user()->id;
            $review->rating = Request::input('review-rating');
            $review->comments = Request::input('review-text');
            $review->save();
            return back()->with('alert', 'Review Added Sucessfully!');
        }else{
            return back()->with('alert', 'You Have Already Reviewed This Item!');
        }
    }
}