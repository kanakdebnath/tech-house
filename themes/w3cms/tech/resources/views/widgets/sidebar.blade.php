
@if (!empty(config('Widget.show_sidebar')))



@php
  $recentBlogs =  DzHelper::recentBlogs( array('limit'=>3, 'order'=>'asc', 'orderby'=>'created_at') );
  $categoryBlogs =  DzHelper::categoryBlogs( array('limit'=>4, 'order'=>'asc', 'orderby'=>'title'));
  dd($categoryBlogs);
  $BlogTags =  DzHelper::BlogTags();
@endphp


       <div class="border p-4 px-4 mt-5">
           <h5 class="mb-0">POPULAR TAGS </h5>
           <span class="bor"></span>
            <div class="tags pt-4">
                <ul>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">design</a></li>
                    <li><a href="#">ux</a></li>
                    <li><a href="#">usability</a></li>
                    <li><a href="#">develop</a></li>
                    <li><a href="#">icon</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">consult</a></li>
                    <li><a href="#">kit</a></li>
                    <li><a href="#">keyboard</a></li>
                    <li><a href="#">mouse</a></li>
                    <li><a href="#">tech</a></li>
                </ul>
            </div>
       </div>

    </div>
@endif