<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', ['books'=> $books]);

    }

    public function create()
    {
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

        $header=['region','country','operator','brand','host_network','technology','mvno_category','mvno_type','subscriber','parent_owner','email','telephone','fax','linkedin','website','headquarter','established','regulator','company_overview'];

         //dd($header1);

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



           //dd(preg_match('/"([^"]+)"/', $data['technology'], $m));

           // setting type
           //    foreach ($data as $key => &$value) {
           //     $value=($key=="zip" || $key=="month")?(integer)$value: (float)$value;
          //    }

           // Table update
            $region=utf8_encode($data['region']);
            $country=utf8_encode($data['country']);
            $operator=utf8_encode($data['operator']);
            $brand=utf8_encode($data['brand']);
            $host_network=utf8_encode($data['host_network']);
            $technology=utf8_encode('');
            $mvno_category=utf8_encode($data['mvno_category']);
            $mvno_type=utf8_encode($data['mvno_type']);
            $subscriber=utf8_encode($data['subscriber']);
            $parent_owner=utf8_encode($data['parent_owner']);
            $email=utf8_encode($data['email']);
            $telephone=utf8_encode($data['telephone']);
            $fax=utf8_encode($data['fax']);
            $linkedin=utf8_encode($data['linkedin']);
            $website=utf8_encode($data['website']);
            $headquarter=utf8_encode($data['headquarter']);
            $established=utf8_encode($data['established']);
            $regulator=utf8_encode($data['regulator']);
            $company_overview=utf8_encode($data['company_overview']);


            //$budget= Book::firstOrNew(['region'=>$region,'country'=>$country,'operator'=>$operator,'brand'=>$brand,'host_network'=>$host_network,'technology'=>$technology,'mvno_category'=>$mvno_category,'mvno_type'=>$mvno_type,'subscriber'=>$subscriber,'parent_owner'=>$parent_owner,'email'=>$email,'telephone'=>$telephone,'fax'=>$fax,'linkedin'=>$linkedin,'website'=>$website,'headquarter'=>$headquarter,'established'=>$established,'regulator'=>$regulator,'company_overview'=>$company_overview]);
            $budget = new Book;
            $budget->region=$region;
            $budget->country=$country;
            $budget->operator=$operator;
            $budget->brand=$brand;
            $budget->host_network=$host_network;
            $budget->technology=$technology;
            $budget->mvno_category=$mvno_category;
            $budget->mvno_type=$mvno_type;
            $budget->subscriber=$subscriber;
            $budget->parent_owner=$parent_owner;
            $budget->email=$email;
            $budget->telephone=$telephone;
            $budget->fax=$fax;
            $budget->linkedin=$linkedin;
            $budget->website=$website;
            $budget->headquarter=$headquarter;
            $budget->established=$established;
            $budget->regulator=$regulator;
            $budget->company_overview=$company_overview;
            $budget->save();

            return redirect()->route('books.index')
                             ->with('success', 'Book uploaded successfully');
        }


    }

    public function show($id)
    {
        $findBook = Book::find($id);
        return view('book.show', ['book'=>$findBook]);
    }

}
