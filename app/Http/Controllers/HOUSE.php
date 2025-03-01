<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HOUSE extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return view('backend.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'string|required',
            'email' => 'string|required',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);

        $data = $request->all();

        $status = \App\Models\House::create($data);



        if($status == true){

          return redirect('/contact')->with('success', 'Data inserted succesfully');

        }else{
            dd('Opps! Error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
