<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        //$batches = Batch::all();

        return view('book.upload');
    }

    public function store(Request $request)
    {   
        //get file
        $upload=$request->file('upload-file');
        
        $filePath=$upload->getRealPath();
        //open and read
        $file=fopen($filePath, 'r');

        $header1= fgetcsv($file);

        $header=['name','author'];

        // dd($header);

        // $escapedHeader=[];
        // //validate
        // foreach ($header as $key => $value) {
        //     $lheader=strtolower($value);
        //     $escapedItem=preg_replace('/[^a-z]/', '', $lheader);
        //     array_push($escapedHeader, $escapedItem);
        // }

        // //looping through othe columns
        while($columns=fgetcsv($file))
        {

           $data= array_combine($header, $columns);

           // setting type
           //    foreach ($data as $key => &$value) {
           //     $value=($key=="zip" || $key=="month")?(integer)$value: (float)$value;
          //    }

           // Table update
           $name=$data['name'];
           $author=$data['author'];

           $budget= Book::firstOrNew(['name'=>$name,'author'=>$author]);
           $budget->name=$name;
           $budget->author=$author;
           $budget->save();

        }
        
        
    }

}
