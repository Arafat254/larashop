 
@extends('layouts.backend.app')

@section('content')
 <h2>Add Subproduct</h2> <br /> <div class="row"> <div class="col-md-12"> <div class="panel panel-primary" data-collapsed="0"> <div class="panel-heading"> <div class="panel-title">
Create new subproduct
</div> <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div> <div class="panel-body">


			 <form role="form" class="form-horizontal form-groups-bordered" method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data"> 
			 	@csrf
				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">Product Name</label> 
						<div class="col-sm-5"> 
						<input type="text" class="form-control" name="name" id="field-1" placeholder="Enter subproduct name"> 
					</div> 
				</div> 


				<div class="form-group"> 
				 	<label class="col-sm-3 control-label">Select Category</label> 
				 	<div class="col-sm-5"> 
				 		<select name="category" class="form-control"> 
				 				<option>Select Category</option> 
				 				@foreach($categories as $category)
				 					<option value="{{ $category->id }}">{{ $category->name }}</option>
				 				
				 				@endforeach
				 			
				 		</select> 
				 	</div> 
				 </div>

				 <div class="form-group"> 
				 	<label class="col-sm-3 control-label">Select subcategory</label> 
				 	<div class="col-sm-5"> 
				 		<select name="subcategory" class="form-control"> 
				 				<option>Select SubCategory</option> 
				 				@foreach($subcategories as $category)
				 					<option value="{{ $category->id }}">{{ $category->name }}</option>
				 				
				 				@endforeach
				 			
				 		</select> 
				 	</div> 
				 </div>

				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">Product Quantity</label> 
						<div class="col-sm-5"> 
						<input type="number" class="form-control" name="quantity" id="field-1" placeholder="Enter subproduct name"> 
					</div> 
				</div> 


				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">Product Regular Price</label> 
						<div class="col-sm-5"> 
						<input type="number" class="form-control" name="regular_price" id="field-1" placeholder="Enter subproduct name"> 
					</div> 
				</div> 

				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">Product Price</label> 
						<div class="col-sm-5"> 
						<input type="number" class="form-control" name="price" id="field-1" placeholder="Enter subproduct name"> 
					</div> 
				</div> 

				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">product Image</label> 
						<div class="col-sm-5"> 
						<input type="file" class="form-control" name="image"> 

					</div> 

				</div>

				<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">product Gallary Image(choose multiple)</label> 
						<div class="col-sm-5"> 
						<input type="file" class="form-control" name="photo[]" multiple> 
					</div> 
				</div>


				<div class="form-group"> 
						<label for="field-ta" class="col-sm-3 control-label">Product Description</label> 
						<div class="col-sm-5"> 
							<textarea class="form-control" name="description" id="field-ta" placeholder="Product Description"></textarea> 
						</div> 
					</div>

					<div class="form-group"> 
						<label for="field-ta" class="col-sm-3 control-label">Product Information</label> 
						<div class="col-sm-5"> 
							<textarea class="form-control" name="information" id="field-ta" placeholder="Product Information"></textarea> 
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

	<style>
		body{
			overflow-x: hidden;
			
		}
	</style>



	
@endpush