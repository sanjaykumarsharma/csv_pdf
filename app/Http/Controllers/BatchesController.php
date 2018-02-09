<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Batch;
use Illuminate\Support\Facades\Auth;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::all();

        return view('batch/index', ['batches'=> $batches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('batch/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'batch' => 'required|unique:batches',
        ]);

        $batch = Batch::create([
            'batch' => $request->input('batch')
        ]);


        if($batch){
            return redirect()->route('batches.index')
                                ->with('success' , 'Batch created successfully');
        }


        return back()->withInput()->with('errors', 'Error creating new Batch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch = Batch::find($id);
        //dd($batch);
        return view('batch.edit', ['batch'=>$batch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'batch' => 'required|unique:batches',
        ]);

        $batchUpdate = Batch::where('id', $id)
                              ->update([
                                  'batch'=> $request->input('batch'),
                              ]);

        if($batchUpdate){
            return redirect()->route('batches.index')
                             ->with('success', 'Batch Updated Successfully');
        }

        return back()->withInput()->with('errors', 'Error editing new Batch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findBatch = Batch::find($id);

        if($findBatch->delete()){
            return redirect()->route('batches.index')
                             ->with('success', 'Batch deleted successfully');
        }

        return back()->withInput()->with('error' , 'Batch could not be deleted');
    }
}
