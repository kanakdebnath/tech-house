<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Expertise;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpertiseRequest;
use App\Http\Requests\UpdateExpertiseRequest;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Skills';
        $expertise = Expertise::latest()->get();

        return view('admin.expertise.index', compact('expertise', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Skills Add';

        return view('admin.expertise.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpertiseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpertiseRequest $request)
    {
        Expertise::create($request->validated());

        return to_route('expertise.index')->with([
            'message' => 'Expertise created success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function show(Expertise $expertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Expertise $expertise)
    {
        $page_title = 'Skills Add';

        return view('admin.expertise.edit', compact('expertise', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpertiseRequest  $request
     * @param  \App\Models\Admin\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpertiseRequest $request, Expertise $expertise)
    {
        $expertise->update($request->validated());

        return to_route('expertise.index')->with([
            'message' => 'Expertise created success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expertise $expertise)
    {
        $expertise->delete();

        return back()->with([
            'message' => 'Expertise created success',
        ]);
    }
}
