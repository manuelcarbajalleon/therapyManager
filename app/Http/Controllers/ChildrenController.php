<?php

namespace App\Http\Controllers;
use App\Child;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Redirect;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $children = Child::all();
    	return view('children.index', compact('children'));    //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('children.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
     public function store()
     {
     	 $input = Input::all();




       $childDocument = $child->slug . '.' .
                Input::file('document')->getClientOriginalExtension();

        $input['document'] = $childDocument;
        Child::create( $input );
        Input::file('document')->move(
                base_path() . '/public/childrendocuments/', $childDocument
            );
     	  return Redirect::route('children.index')->with('message', 'New child saved');
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Child $child)
    {
        return view('children.show', compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Child $child)
    {
        return view('children.edit', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Child $child)
    {
      $input = array_except(Input::all(), '_method');


            $childDocument = $child->slug . '.' .
                     Input::file('document')->getClientOriginalExtension();
            $input['document'] = $childDocument;
      $child->update($input);      
            Input::file('document')->move(
                     base_path() . '/public/childrendocuments/', $childDocument
                 );
    	return Redirect::route('children.index', $child->slug)->with('message', 'Child info updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Child $child)
    {
      $child->delete();

	    return Redirect::route('children.index')->with('message', 'Child deleted.');

    }
}
