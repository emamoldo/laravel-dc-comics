<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Comics::all());
        return view("comics.index", ['comics' => Comics::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        //$data = $request->all();
        // $comic = new Comics();
        // $comic->thumb = $data['thumb'];
        // $comic->title = $data['title'];
        // $comic->type = $data['type'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->price = $data['price'];
        // $comic->description = $data['description'];
        // $comic->save();

        $val_data = $request->validated();

        Comics::create($val_data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comic)
    {
        return view('comics.edit', compact('comic'));

        // return to_route('comics.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comics $comic)
    {
        $comic->update($request->all());
        $val_data = $request->validated();
        dd($val_data);
        $comic->update($val_data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
