<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /*la fonction ci dessous permet a un utilisateu
    r de faire un commentaire seulement s'il est connecté*/
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Product $product){
        request()->validate([
            'subject' => 'required|min:5'
        ]);

        $comment=new comment();
        $comment->subject = request('subject');
        $comment->user_id = auth()->user()->id;

        $product->comments()->save($comment);

        return redirect()->route('products.show', $product);
    }
}
