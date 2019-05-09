 
@extends('layouts.backend.app')

@section('content')
 <h2>Add Subcategory</h2> <br /> <div class="row"> <div class="col-md-12"> <div class="panel panel-primary" data-collapsed="0"> <div class="panel-heading"> <div class="panel-title">
Create new subcategory
</div> <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div> <div class="panel-body">


 <form role="form" class="form-horizontal form-groups-bordered" method="POST" action="{{ route('admin.category.update',$category->id) }}" enctype="multipart/form-data"> 
 	@method('PUT')
 	@csrf
	<div class="form-group"> 
		<label for="field-1" class="col-sm-3 control-label">category Name</label> 
			<div class="col-sm-5"> 
				<input type="text" class="form-control" value="{{ $category->name }}" name="name" id="field-1" placeholder="Enter category name"> 
		</div> 
	</div> 

	<div class="form-group"> 
					<label for="field-1" class="col-sm-3 control-label">Subcategory Name</label> 
						<div class="col-sm-5"> 
						<input type="file" class="form-control" name="image"> 
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