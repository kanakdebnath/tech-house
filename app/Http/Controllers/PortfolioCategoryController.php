<?php

namespace App\Http\Controllers;

use App\Models\PortfolioCategory;
use App\Http\Requests\StorePortfolioCategoryRequest;
use App\Http\Requests\UpdatePortfolioCategoryRequest;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = PortfolioCategory::latest()->get();

        return view('admin.portfolio_category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioCategoryRequest $request)
    {
        PortfolioCategory::create($request->validated());

        return redirect()->route('portfolio-category.index')->with(['success' => 'portfolio catgeory created success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioCategory $portfolioCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('admin.portfolio_category.edit', compact('portfolioCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioCategoryRequest  $request
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioCategoryRequest $request, PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->update($request->validated());

        return redirect()->route('portfolio-category.index')->with(['success' => 'portfolio catgeory created success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->delete();

        return redirect()->back()->with(['success'=> 'Portfolio Category Deleted success']);
    }
}
