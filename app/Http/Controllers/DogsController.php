<?php

namespace App\Http\Controllers;

use App\Models\Dogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DogsController extends Controller
{
    public function index()
    {
        $data = array('dogs' => DB::table('dogs')->orderBy('created_at', 'desc')->paginate(7));

        return view("dogs.index", $data);
    }
    public function create()
    {

        return view("dogs.addnew");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", 'min:3'],
            'breed' => ['required', 'min:4'],
            'age' => ['required', 'integer', 'max:15']
        ]);
        Dogs::create($validated);

        return redirect('/')->with('message', 'dog added successfully');
    }
    public function destroy($id)
    {

        Dogs::destroy($id);
        return redirect('/')->with('message', 'successfully deleted');
    }
    public function edit($id)
    {
        dd($id);
        return view('dogs.edit', ['dog' => Dogs::find($id)]);
    }
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            "name" => ["required", 'min:3'],
            'breed' => ['required', 'min:4'],
            'age' => ['required', 'integer', 'max:15']
        ]);
        $dog = Dogs::find($id);
        $dog->update($validated);
        return redirect('/')->with('message', 'successfully updated');
    }
}
