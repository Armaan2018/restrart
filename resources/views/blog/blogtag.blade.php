@extends('blog.layouts.app')



@section('main-content-blog')

@foreach ($post as $element)
@if ($element -> trash == false)
  

{{-- @php
  $element = App\Models\Post::where('trash',false)->latest()->get();
@endphp
 --}}

@php
   $post_type = json_decode($element -> featured)	
@endphp

    @if ($post_type -> format == 'image')
                        <div class="col-md-6 col-sm-12">
                           <div class="blog grid-blog">

                      


                              <div class="blog-image">
                                 <a href="{{ route('blog.single',$element-> slug) }}"><img class="img-fluid" src="{{URL::to('')}}/media/post/{{$post_type -> image}}" alt="Post Image"></a>

                              </div>


             

                              <div class="blog-content">
                                 <ul class="entry-meta meta-item">
{{--                                     <li>
                                       <div class="post-author">
                                          <a href="doctor-profile.html"><img src="blog/assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
                                       </div>
                                    </li> --}}
                                    <li><i class="far fa-clock mr-1"></i>{{date("d F, Y")}}</li>
                                   
                                    <li> 
                                    @foreach ($element -> categories as $cat)
                                    <a href="#" class="btn view-btn p-1" tabindex="-1">{{ $cat -> name}}</a>

                                                                    @endforeach                                
                                    	
                                    </li>


                                 </ul>
                                 <h3 class="blog-title"><a href="{{ route('blog.single',$element-> slug) }}">{{ $element -> title}}</a></h3>
                                 <p class="mb-0">{!! Str::of(htmlspecialchars($element -> content))->words(15)!!}<a href="{{ route('blog.single',$element-> slug) }}" class="text-danger">Read More</a></p>

                                    <ul class="entry-meta meta-item mt-3">
                                    <li><i class="far fa-user-circle mr-1"></i>{{ Auth::user()-> name}}</li>
                                   
                                    <li> 
                                    @foreach ($element -> tags as $tag)
                                    <span  class="badge badge-primary" tabindex="-1">{{ $tag -> name}}</span>


                                                                    @endforeach                                
                                    	
                                    </li>


                                 </ul>
                              </div>
                           </div>
                        </div>

                                     @endif
                                     @endif
@endforeach




{{-- <div class="container">
	      
	      {{ $post->links('blog.layouts.partials.paginator') }}
          
</div> --}}




@endsection