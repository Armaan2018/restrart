                  <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">
                     <div class="card search-widget">
                        <div class="card-body">



                           <form class="search-form" method="POST" action="{{ route('blog.search.sidebar') }}">
                            @csrf
                              <div class="input-group">
                                 <input type="text" name="searchname" placeholder="Search..." class="form-control">
                                 <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                 </div>
                              </div>
                           </form>


                        </div>
                     </div>
                     <div class="card post-widget">
                        <div class="card-header">
                           <h4 class="card-title">Latest Posts</h4>
                        </div>
                        <div class="card-body">
                           <ul class="latest-posts">


                    @foreach ($sidebarpost as $element)
                             @php
                               $post_type = json_decode($element -> featured)
                             @endphp

                             @if ($post_type -> format == 'image')

                    

                                 <li>
                                 <div class="post-thumb">
                                    <a href="{{ route('blog.single',$element-> slug) }}">
                                    <img class="img-fluid" src="{{URL::to('')}}/media/post/{{$post_type -> image}}" alt=""> 
                                    </a>
                                 </div>
                                 <div class="post-info">
                                    <h4>
                                       <a href="{{ route('blog.single',$element-> slug) }}">{!!Str::of(htmlspecialchars($element -> title))->words(20)!!}</a>
                                    </h4>
                                    <p>{{date("d F, Y")}}</p>
                                 </div>
                              </li>
                                       @endif


                    @endforeach


                           </ul>
                        </div>
                     </div>
                     <div class="card category-widget">
                        <div class="card-header">
                           <h4 class="card-title">Blog Categories ({{ $catno }})</h4>
                        </div>
                        <div class="card-body">
                           <ul class="categories">
                              @foreach ($catall as $cat)
                                 <li><a href="{{ route('blog.cat.search',$cat -> slug)}}">{{ $cat -> name}} <span>({{ $catno }})</span></a></li>
                              @endforeach
                             

                           </ul>
                        </div>
                     </div>
                     <div class="card tags-widget">
                        <div class="card-header">
                           <h4 class="card-title">Tags ({{ $tagno }})</h4>
                        </div>
                        <div class="card-body">
                           <ul class="tags">
                              @foreach ($tagall as $tagsingle)
                                <li><a href="{{ route('blog.tag.search',$tagsingle -> slug) }}" class="tag"> {{ $tagsingle -> name}}</a></li>
                              @endforeach
                              

                           </ul>
                        </div>
                     </div>
                  </div>