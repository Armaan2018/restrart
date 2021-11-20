<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from doccure-html.dreamguystech.com/template/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 06:32:23 GMT -->
   <head>
      <meta charset="utf-8">
      <title>Doccure</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">


          @include('blog.layouts.partials.css')

   </head>
   <body>
      <div class="main-wrapper">

         @include('blog.layouts.parts.header')

         <div class="breadcrumb-bar">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-md-12 col-12">
                     <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{ route('blog') }}">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                     </nav>
                     <h2 class="breadcrumb-title">Blog Grid</h2>
                  </div>
               </div>
            </div>
         </div>


         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-12">
                     <div class="row blog-grid-row">
                
                @section('main-content-blog')
                @show


                     </div>
                  {{-- blog pagination --}}

           {{-- blog pagination --}}


                  </div>
        @include('blog.layouts.parts.sidebar')
               </div>
            </div>
         </div>
    @include('blog.layouts.parts.footer')

      </div>
    @include('blog.layouts.partials.js')
   </body>
   <!-- Mirrored from doccure-html.dreamguystech.com/template/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 06:32:23 GMT -->
</html>