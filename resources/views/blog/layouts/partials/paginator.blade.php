                     <div class="row">
                        <div class="col-md-12">
                           <div class="blog-pagination">
                              <nav>
@if ($paginator->hasPages())
  <ul class="pagination justify-content-center">

{{-- if not on the first page --}}

                                 @if ($paginator->onFirstPage())
                                    <li class="page-item disabled">
                                       <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                       <a class="page-link" href="{{$paginator -> previousPageUrl()}}" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                                    </li>
                                 @endif



             
        @foreach ($elements as $element)
           {{-- check whether pagination avialable --}}
            @if (is_string($element))
                <li class="page-item disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- if pagination available --}}
                       @if (is_array($element))

                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                                                            <li class="page-item active">
                                       <a class="page-link">{{ $page }} <span class="sr-only">(current)</span></a>
                                    </li>
                    @else

                                                          <li class="page-item">
                                       <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                    @endif
                @endforeach
            @endif

        @endforeach
{{--                                     <li class="page-item disabled">
                                       <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                       <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active">
                                       <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                       <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                       <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                    </li> --}}

                                    @if ($paginator->hasMorePages())
                                    <li class="page-item ">
                                       <a class="page-link" href="{{$paginator->nextPageUrl()}}" tabindex="-1"><i class="fas fa-angle-double-right"></i></a>
                                    </li>
                                    @else
                                    <li class="page-item disabled">
                                       <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-right"></i></a>
                                    </li>

                                    @endif
                                 </ul>

@endif

                              </nav>
                           </div>
                 
                        </div>
                     </div>