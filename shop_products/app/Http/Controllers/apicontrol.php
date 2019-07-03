<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Http\Resources\product as productRecource;

class apicontrol extends Controller
{
   //CREATE FUNCTION
    public function store(Request $request)
    {
      $products = new product;

      $products->pname = $request->input('pname');
      $products->pquantity = $request->input('pquantity'); 
      $products->pprice = $request->input('pprice');

      $products->save();
      return new productRecource($products);

    } 



    //READ FUNCTION
    public function show()
    {
      $products =  product::all();
      return productRecource::collection($products);

    } 
     


     //READ BY ID FUNCTION
    public function  showbyid($id)
    {
      $products =  product::find($id);
      if($products)
      {
        return new productRecource($products);

      }

     else
     {
       return response()->json(['Error'=>'There is no data available on this id:'.$id.' '],404);
     }

    } 



     
     //UPDATE FUNCTION
    public function update(Request $request,$id)
    {
      $products =  product::find($id);

      if($products)
      {
        $products->pname = $request->input('pname');
        $products->pquantity = $request->input('pquantity');  
        $products->pprice = $request->input('pprice');

        $products->save();
        return new productRecource($products);
       
      }

     else
     {
       return response()->json(['Error'=>'There is no id available to update data in id :'.$id.' '],404);
     }

    } 



    
   
     //DELETE FUNCTION
    public function delete($id)
    {
      $products =  product::find($id);

      if($products)
      {
        $products->delete();
        return response()->json(['Deleted'=>'Deleted succussfuly id :'.$id.' ']);

      }

     else
     {
       return response()->json(['Error'=>'There is no id available to delete for id:'.$id.' '],404);
     }

    } 

}
