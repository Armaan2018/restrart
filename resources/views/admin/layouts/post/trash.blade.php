			@extends('admin.layouts.app')


@section('main-content')	



		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
 @include('admin.layouts.header')            
           
			<!-- /Header -->
			
			<!-- Sidebar -->
 @include('admin.layouts.sidebar') 
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome {{ Auth::user() -> name}}!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Trash</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->



<div class="col-lg-12">
<button class="btn btn-primary" data-toggle="modal" data-target="#insertmodel" type="button">Create New Post</button>
</div>

<br>
<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Trashes</h4>
									<div class="pubtrash mt-3">
										<a href="{{ route('post') }}" class="btn btn-primary">Posts <span id="post_count_span"></span></a>
										<a href="{{ route('post.trash') }}" class="btn btn-dark">Trash <span id="trash_count_span"></span></a>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mb-0">
											<thead>
												<tr>
													<th>Post Title</th>
													<th>Post Format</th>
													<th>Category</th>
													<th>Tags</th>
													<th>Time</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody id="post_trash_tbody">




		



											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>


                      
					
				</div>	




				<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="insertmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




      	<form id="post_form" action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
      		@csrf



       <div class="form-group">
			<label>Select Post Format</label>
      <select class="custom-select mr-sm-2" id="post_format" name="format">
        <option selected="" disabled="">Choose Post Format</option>
        <option value="text">Text</option>
        <option value="image">Image</option>
        <option value="gallery">Gallery</option>
        <option value="audio">Audio</option>
        <option value="video">Video</option>
      </select>
		</div>

        <div class="form-group" id="title">
			<label>Title</label>
			<input name="title" type="text"  class="form-control">
			<span id="error_tag"></span>
		</div>         




	  <div class="form-group" id="category">
			<label>Category</label>
      <select class="custom-select mr-sm-2" id="post_category" name="category">
        <option selected="" disabled="">Choose Category</option>
        @foreach ($category as $cat)
            <option value="{{ $cat -> id}}">{{ $cat -> name}}</option>
        @endforeach
       

      </select>
      <span id="error_tag"></span>
		</div>         



		<div class="form-group" id="image">
			<div class="area_image_field">
				<img height="200px" src=""  id="feature_image_load">
			</div>



			<label>Image</label>
			<input name="image" type="file" id="feature_image" class="form-control">
			<span id="error_tag"></span>
		</div>           

		<div class="form-group" id="gallery">

{{-- 			<div class="area_image_field">
				<img height="200px" src=""  id="feature_image_load">
			</div>

			<label>Gallery</label>
			<input name="gallery[]" type="file" multiple="" id="feature_image" class="form-control">
			<span id="error_tag"></span> --}}


 <div class="input-images">
 	
 </div>

    <div class="input-field">
        <label class="active">Add Gallery</label>

        <div class="input-images-2" style="padding-top: .5rem;">

        </div>

    </div>
		</div>           


		<div class="form-group" id="audio">
			<label>Audio</label>
			<input name="audio" type="text"  class="form-control">
			<span id="error_tag"></span>
		</div>  

		<div class="form-group" id="video">
			<label>Video</label>
			<input name="video" type="text"  class="form-control">
			<span id="error_tag"></span>
		</div>   	


				 <div class="form-group" id="tag">
			<label>Select Tags</label>
<div class="qtagselect">
  <select class="qtagselect__select" multiple name="tag[]">
  	@foreach ($tag as $tag_element)
  		    <option value="{{ $tag_element -> id}}" class="isblue">{{ $tag_element -> name}}</option>
  	@endforeach


  </select>
</div>
		</div>  	


		<div class="form-group" id="basic_editor">
			<label>Write Here</label>
			<textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
			<span class="error_tag"></span>
		</div>       




		      <div class="modal-footer" >
        <button type="submit" id="post_btn" class="btn btn-primary">Create Post</button>
      </div>

		</form>


      </div>

    </div>
  </div>
</div>


<!-- edit modal -->






			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		@endsection



