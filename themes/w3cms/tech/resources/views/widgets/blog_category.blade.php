<div class="border p-4 px-4">
    <h5 class="mb-0">{{ __('Categories') }} </h5>
    <span class="bor"></span>
    @if($blogcategories->isNotEmpty())
    <ul class="pt-4">
        @foreach($blogcategories as $blogcategory)
            <li><a href="{{ DzHelper::laraBlogCategoryLink($blogcategory->id) }}">{{ $blogcategory->title }} </a> {{ $blogcategory->blog_count; }} </li>
        @endforeach
    </ul>
    @else
        <p>{{ __('No record found.') }}</p>
    @endif
</div>