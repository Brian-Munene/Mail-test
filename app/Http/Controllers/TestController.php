<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Test::paginate(2);
        return  response()->json($test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = new Test([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);
        $test->save();
        return response()->json('The emails have been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);
        return response()->json($test);
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
        $test = Test::find($id);
        $test->update($request->all());

        return response()->json('The email has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();

        return response()->json('The email has been successfully deleted');
    }

    /**
     * Search for an email address
     * 
     */
    public function search(Request $request)
    {
        $test = Test::where('name', 'LIKE','%'.$request->keyword.'%')->get();
        return response()->json($test); 
    }

    /**
     * Send mail to alll CreateUser
     * 
     */ 
    public function sendMail(Request  $request) 
    {
        $details = Test::whereNotNull('email')
                                ->pluck('email');
        echo($details);
        // SendEmail::dispatch($details);
        return response()->json($details);
    }
}
