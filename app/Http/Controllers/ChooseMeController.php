<?php

namespace App\Http\Controllers;

use App\Models\ChooseMe;
use App\Http\Requests\StoreChooseMeRequest;
use App\Http\Requests\UpdateChooseMeRequest;

class ChooseMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $choose = ChooseMe::latest()->first();

        return view('admin.choose_me.create', compact('choose'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChooseMeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChooseMeRequest $request)
    {
        $choose = ChooseMe::latest()->first();

        $data = $request->validated();

        if($request->hasFile('photo')){

            if($choose->photo != null){
                if(file_exists($choose->photo)){
                    unlink($choose->photo);
                }
            }

            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension();
            $fileName = str_replace(' ', '-',$request->title) . time() . '.' . $extension;
            $photo->move('uploads/', $fileName);

            $data['photo'] = 'uploads/' . $fileName;
        }

        if(!empty($choose)){
            $choose->update($data);
        }else{
            ChooseMe::create($data);
        }

        return redirect()->back()->with(['success' => 'data updated success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChooseMe  $chooseMe
     * @return \Illuminate\Http\Response
     */
    public function show(ChooseMe $chooseMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChooseMe  $chooseMe
     * @return \Illuminate\Http\Response
     */
    public function edit(ChooseMe $chooseMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChooseMeRequest  $request
     * @param  \App\Models\ChooseMe  $chooseMe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChooseMeRequest $request, ChooseMe $chooseMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChooseMe  $chooseMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChooseMe $chooseMe)
    {
        //
    }
}
