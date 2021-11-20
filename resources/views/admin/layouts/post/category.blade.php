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
									<li class="breadcrumb-item active">Category</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->



<div class="col-lg-12">
<button class="btn btn-primary" data-toggle="modal" data-target="#insertmodel" type="button">Add New Category</button>
</div>
<br>
<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Categories</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mb-0">
											<thead>
												<tr>
													<th>No</th>
													<th>Category Name</th>
													<th>Slug</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody id="category_tbody">


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
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form id="insert_category" action="{{ route('category.create') }}" method="POST">
      		@csrf

        <div class="form-group">
			<label>Category Name</label>
			<input name="name" type="text" class="form-control">
			<span id="error_category"></span>
		</div>

		      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>

		</form>


      </div>

    </div>
  </div>
</div>


<!-- edit modal -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form id="edit_category" action="{{ route('category.update') }}" method="POST">
      		@csrf

        <div class="form-group">
			<label>Category Name</label>
			<input name="name" type="text" class="form-control">
			<input name="id" type="hidden" class="form-control">
			<span id="error_update_span" style="color:coral;"></span>
		</div>

		      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Category</button>
      </div>

		</form>


      </div>

    </div>
  </div>
</div>




			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		@endsection



