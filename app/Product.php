<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'status'];

    static function createValidated($request){
        $validator = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->save();
        return $product;
    }

    public function updateProduct($request){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
        ]);

        $this->name = $request->name;
        $this->description = $request->description;
        $product->status = $request->status;
        $this->save();
        return $this;
    }
}
