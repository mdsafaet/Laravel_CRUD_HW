<?php

namespace App\Http\Controllers;

use App\Models\Girlfriend;
use Illuminate\Http\Request;


class GirlfriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $girlfriends = girlfriend::latest()->paginate(5);
        
        return view('girlfriends.index',compact('girlfriends'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('girlfriends.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        
        girlfriend::create($request->all()); //here girlfriend is mehod of model and create is method of laravel
         
        return redirect()->route('girlfriend.index')
                        ->with('success','girlfriend created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Girlfriend $girlfriend) 
    {
        return view('girlfriends.show',compact('girlfriend'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Girlfriend $girlfriend)
    {
        return view('girlfriends.edit',compact('girlfriend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Girlfriend $girlfriend)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        
        $girlfriend->update($request->all()); //
         
        return redirect()->route('girlfriend.index')
                        ->with('success','girlfriend update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Girlfriend $girlfriend)
    {
        $girlfriend->delete();
         
        return redirect()->route('girlfriend.index')
                        ->with('success','girlfriend delete successfully.');
    }
}
