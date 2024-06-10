<?php

namespace App\Http\Controllers;

use App\Enum\StatusType;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::with('portfolioCategory')->latest()->get();

        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolioCategories = PortfolioCategory::whereStatus(StatusType::ACTIVE)->latest()->select('id', 'title')->get();

        return view('admin.portfolio.create', compact('portfolioCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $extention = $photo->getClientOriginalExtension();
            $fileName = str_replace(' ', '-', $request->title) . '.' . $extention;
            $photo->move('uploads/', $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        Portfolio::create($data);

        return redirect()->route('portfolios.index')->with(['success' => 'portfolio created success.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $portfolioCategories = PortfolioCategory::whereStatus(StatusType::ACTIVE)->latest()->select('id', 'title')->get();

        return view('admin.portfolio.edit', compact('portfolios', 'portfolioCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioRequest  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if($portfolio->image != null){
                if(file_exists($portfolio->image)){
                    unlink($portfolio->image);
                }
            }

            $photo = $request->file('image');
            $extention = $photo->getClientOriginalExtension();
            $fileName = str_replace(' ', '-', $request->title) . '.' . $extention;
            $photo->move('uploads/', $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        $portfolio->update($data);

        return redirect()->route('portfolios.index')->with(['success' => 'portfolio updated success.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->back()->with(['success' => 'portfolio deleted success.']);
    }
}
