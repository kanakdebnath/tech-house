@extends('layout.default')

@section('content')

<!--        breadcum start-->
<div class="breadcum" style="background-image: linear-gradient(90deg,rgba(17, 0, 80, 0.60) 0%,rgba(17, 0, 80, 0.70) 100%),url({{ theme_asset('img/breadcum.jpg') }})!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-5">
                <h1>Blog Details </h1>
                <p>Your Partner for Software Innovation</p>
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Blog Details </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--        breadcum end-->
  


        <!--Case Study start -->
        <div class="container p-5">
            <div class="row g-4">
               <div class="col-lg-4">
                    <div class="sidebar"> 
                        @include('widgets.sidebar')
                    </div>
               </div>
                <div class="col-lg-8">

                    @if($blog)
                    <div class="case-img mb-5">

                        @if(optional($blog->feature_img)->value)
                            <img class="img-fluid rounded-3" src="{{ asset('storage/blog-images/'.$blog->feature_img->value) }}" alt="{{ __('Blog Image') }}">
                        @else
                            <img class="img-fluid rounded-3" src="{{ theme_asset('img/case-details.jpg') }}" alt="{{ __('Blog Image') }}">
                        @endif

                        @php
                                if($blog->visibility != 'Pu'){
                                    $blog_visibility = $blog->visibility == 'Pr' ? __('Private: ') : __('Protected: ') ;
                                }else {
                                    $blog_visibility = '';
                                }
                            @endphp

                    </div>
                    <p class="fw-bold cor2">IT CONSULTANCY<span class="bor ms-3"></span></p>
                    <h2 class="h1 fw-bold">{{ $blog_visibility }}{{ $blog->title }}</h2>

                    
                    <div>
                        {!! $blog->content !!}
                    </div>


                    @if(isset($blogs) && !empty($blogs))

                    <hr>
                    <div class="row my-5">
                        <div class="col-lg-6">
                            <h2 class="h3 ">{{ __('Related Blog') }} <span class="bor2 ms-3"></span></h2>
                        </div>
                        
                    </div>


                    @forelse($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog-card">
                            <div class="top d-flex justify-content-between">
                                <div class=" ">
                                    <i class="fa-solid fa-calendar-days"></i> &nbsp;
                                    <span> {{ Carbon\Carbon::parse($blog->publish_on)->format('F j, Y') }}</span>
                                </div>
                                <div class="float-end">
                                    <i class="fa-regular fa-comments"></i> &nbsp;
                                    <span> 10 Comments </span>
                                </div>
                            </div>
                            <a href="{{ DzHelper::laraBlogLink($blog->id) }}">
                            @if(optional($blog->feature_img)->value)
                                <img class="img-fluid" src="{{ asset('storage/blog-images/'.$blog->feature_img->value) }}" alt="{{ __('Blog Image') }}">
                            @else
                                <img class="img-fluid" src="{{ theme_asset('img/blog/blog-1.jpg') }}" alt="{{ __('Blog Image') }}">
                            @endif
                            </a>

                            @php
                                if($blog->visibility != 'Pu'){
                                    $blog_visibility = $blog->visibility == 'Pr' ? __('Private: ') : __('Protected: ') ;
                                }else {
                                    $blog_visibility = '';
                                }
                            @endphp

                            <div class="p-4">
                                <a href="{{ DzHelper::laraBlogLink($blog->id) }}">
                                    <h4>{{ $blog_visibility }}{{ Str::limit($blog->title, 40, ' ...') }}</h4>
                                </a>
                                <p>{{ Str::limit($blog->excerpt, 60, ' ...') }}</p>
                                <a href="{{ DzHelper::laraBlogLink($blog->id) }}">Read More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-md-12">{{ __('Records Not found.') }}</div>
                    @endforelse


                    @endif


                @else
                    <div class="col-12">{{ __('No record found.') }}</div>
                @endif
                </div> 
            </div>
            
        </div>
        <!--Case Study end  -->

 
@endsection