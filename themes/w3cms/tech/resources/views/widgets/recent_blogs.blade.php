<div class="widget recent-posts-entry">
    <div class="widget-title">
        <h4 class="title">{{ __('Recent Posts') }}</h4>
    </div>
    <div class="widget-post-bx">
        @forelse($blogs as $blog)
            <div class="widget-post clearfix">
                <div class="dz-media"> 
                    @if(optional($blog->feature_img)->value)
                        <img src="{{ theme_asset('storage/blog-images/'.$blog->feature_img->value) }}" alt="{{ __('Blog Image') }}" >
                    @else
                        <img src="{{ theme_asset('images/noimage.jpg') }}" alt="{{ __('Blog Image') }}" >
                    @endif
                </div>
                <div class="dz-info">
                    @php
                        if($blog->visibility != 'Pu'){
                            $blog_visibility = $blog->visibility == 'Pr' ? __('Private: ') : __('Protected: ') ;
                        }else {
                            $blog_visibility = '';
                        }

                    @endphp
                    <h6 class="title"><a href="{{ DzHelper::laraBlogLink($blog->id) }}">{{ $blog_visibility }}{{ $blog->title }}</a></h6>
                    <div class="dz-meta">
                        <ul>
                            <li class="post-date"><a href="javascript:void(0);">{{ Carbon\Carbon::parse($blog->publish_on)->format('F j, Y') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @empty
        <div class="col-md-12">{{ __('No record found.') }}</div>
        @endforelse
    </div>
</div>



<div class="border p-4 px-4 mt-5 feeds">
    <h5 class="mb-0">{{ __('Recent Posts') }} </h5>
    <span class="bor"></span>
    @forelse($blogs as $blog)
    <div class="d-flex my-4 pb-4 border-bottom">
        <div class="img">
            <img src="img/blog/blog-1.jpg" alt="" class="img-fluid">
        </div>
        <div class="info ms-3">
            <p class="mb-1"><a href="#!">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
            <p><i class="fa-solid fa-calendar-days"></i> 15th May 2023</p>
        </div>
    </div>
    <div class="d-flex pb-4 border-bottom">
        <div class="img">
            <img src="img/blog/blog-2.png" alt="" class="img-fluid">
        </div>
        <div class="info ms-3">
            <p class="mb-1"><a href="#!">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
            <p><i class="fa-solid fa-calendar-days"></i> 15th May 2023</p>
        </div>
    </div>
    <div class="d-flex mt-4">
        <div class="img">
            <img src="img/blog/blog-3.png" alt="" class="img-fluid">
        </div>
        <div class="info ms-3">
            <p class="mb-1"><a href="#!">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
            <p><i class="fa-solid fa-calendar-days"></i> 15th May 2023</p>
        </div>
    </div>
</div>
