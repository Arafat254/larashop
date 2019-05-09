@extends('layouts.backend.app')


@section('content')

	<br /> <h3>Subcategory List</h3> <br />

	<table class="table table-bordered datatable" id="table-4">
    <thead> 
      <tr> 
        <th>Id</th> 
        <th>Name</th> 
        <th>Created At</th> 
        <th>Updated At</th> 
        <th>Action</th> 
      </tr> 
    </thead>
       <tbody> 

        @foreach($categories as $key=>$category)
          <tr class="even gradeC"> 
            <td>{{ $key + 1 }}</td> 
           <td>{{ $category->name }}</td>
            <td>{{ $category->created_at }}</td> 
            <td>{{ $category->updated_at }}</td>
            <td> <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>
              Edit
              </a> 

               <button onclick="document.getElementById('delete-form-{{ $category->id }}').submit();" class="btn btn-danger btn-sm btn-icon icon-left"><i class="entypo-cancel"></i>Delete</button>

                <form id="delete-form-{{ $category->id }}" method="POST" action="{{ route('admin.category.destroy',$category->id) }}" style="display="none">
                    @csrf
                    @method('DELETE')
                </form>
               </td>
          </tr> 

         @endforeach  
        </tbody> 

          <tfoot> 
            <tr> 
              <th>Id</th> 
              <th>Name</th> 
              <th>Created At</th> 
              <th>Updated At</th> 
              <th>Action</th> 
            </tr> 
            </tfoot> 
          </table> 
          <br />

@endsection

