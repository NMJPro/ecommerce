<?php

namespace App\Http\Controllers;
use App\Http\Requests\Product as productRequest;
use Illuminate\Http\Request;
use App\Models\Category\{Product, CategoryLevel3,ProductGallery};

class ProductController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $products = Product::paginate(5);
            
            return view('product.produit', compact('products'));
            
            
        }     
        
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('product.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(ProductRequest $productRequest)
        {
         
            $product = Product::create([...$productRequest->except(['_token', 'rootpath']), 'category_level3_id'=>1]);

            foreach($productRequest->rootpath as $file) {
                $path = $file->store(config('images.product'), 'public');
                $productGallery = new ProductGallery();
                $productGallery->product_id = $product->id;
                $productGallery->name= $product->name;
                $productGallery->path= str_replace(config('images.product').'/', '', $path);
                $productGallery->rootpath= "/".config('images.product')."/";
                $productGallery->size=0;
                $productGallery->res=0;
                
                $productGallery->save(); 

            }
            return redirect()->route('products.index')->with('info', 'Le produit a bien été créé');
        }
       
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Product $product)
    {
    return view('product.show', compact('product'));
    }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Product $product)
        {
        return view('product.edit', compact('product'));
        }
        
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(ProductRequest $productRequest, Product $product)
    {
    $product->update($productRequest->all());
    return redirect()->route('products.index')->with('info', 'LE produit  a bien été modifié');
    }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Product $product)
    {
       $product->delete();
        return back()->with('info', 'Le produit a ete supprime.');
    }
    
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    