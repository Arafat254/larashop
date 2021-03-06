 
@extends('layouts.backend.app')

@section('content')
 <h2>Add Subcategory</h2> <br /> <div class="row"> <div class="col-md-12"> <div class="panel panel-primary" data-collapsed="0"> <div class="panel-heading"> <div class="panel-title">
Create new subcategory
</div> <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div> <div class="panel-body">


			 <form role="form" class="form-horizontal form-groups-bordered" method="POST" action="{{ route('admin.subcategory.store') }}"> 
			 	@csrf
				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">Subcategory Name</label> 
						<div class="col-sm-5"> 
						<input type="text" class="form-control" name="name" id="field-1" placeholder="Enter subcategory name"> 
					</div> 
				</div> 

				 <div class="form-group"> 
				 	<label class="col-sm-3 control-label">Select2</label> 
				 	<div class="col-sm-5"> 
				 		<select name="cat" class="form-control"> 
				 				<option>Select Category</option> 
				 				@foreach($categories as $category)
				 					<option value="{{ $category->id }}">{{ $category->name }}</option>
				 				
				 				@endforeach
				 			
				 		</select> 
				 	</div> 
				 </div>

				 <div class="col-sm-offset-3 col-sm-5">
				 	<br>
				  <button type="submit" class="btn btn-default">Save</button> 
				</div> 
					</div> 
				</form> 
			</div>
 		</div> 
	</div> 
</div> 




@endsection

@push('css')

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/js/select2/select2.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/js/select2/select2-bootstrap.css') }}">

	<script type="text/javascript" src="{{ asset('assets/backend/js/select2/select2.min.js') }}"></script>


	
@endpush