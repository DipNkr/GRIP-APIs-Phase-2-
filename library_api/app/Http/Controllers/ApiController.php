<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Resources\Book as bookRecource;
class ApiController extends Controller
{
    
     //CREATE FUNCTION
     public function store(Request $request)
     {
       $books = new Book;
 
       $books->Bname = $request->input('Bname');
       $books->Bauthor = $request->input('Bauthor'); 
       $books->Bprice = $request->input('Bprice');
       $books->Bstatus = $request->input('Bstatus');
 
       $books->save();
       return new bookRecource($books);
 
     } 
 
 
 
     //READ FUNCTION
     public function show()
     {
       $books =  Book::all();
       return bookRecource::collection($books);
 
     } 
      
 
 
      //READ BY ID FUNCTION
     public function  showbyid($id)
     {
       $books =  Book::find($id);
       if($books)
       {
         return new bookRecource($books);
 
       }
 
      else
      {
        return response()->json(['Error'=>'There is no data available on this id:'.$id.' '],404);
      }
 
     } 
 
 
 
      
      //UPDATE FUNCTION
     public function update(Request $request,$id)
     {
       $books =  Book::find($id);
 
       if($books)
       {
        
         $books->Bname = $request->input('Bname');
         $books->Bauthor = $request->input('Bauthor'); 
         $books->Bprice = $request->input('Bprice');
         $books->Bstatus = $request->input('Bstatus');
 
         $books->save();
         return new bookRecource($books);
        
       }
 
      else
      {
        return response()->json(['Error'=>'There is no id available to update data in id :'.$id.' '],404);
      }
 
     } 
 
 
 
     
    
      //DELETE FUNCTION
     public function delete($id)
     {
       $books =  Book::find($id);
 
       if($books)
       {
         $books->delete();
         return response()->json(['Deleted'=>'Deleted succussfuly id :'.$id.' ']);
 
       }
 
      else
      {
        return response()->json(['Error'=>'There is no id available to delete for id:'.$id.' '],404);
      }
 
     } 
}
