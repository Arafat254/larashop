@extends('layouts.backend.app')


@section('content')

	<br /> <h3>Subcategory List</h3> <br />

	<table class="table table-bordered datatable" id="table-4">
    <thead> 
      <tr> 
        <th>Id</th> 
        <th>Name</th> 
        <th>Category Name</th>
        <th>Created At</th> 
        <th>Updated At</th> 
        <th>Action</th> 
      </tr> 
    </thead>
       <tbody> 

        @foreach($subcategories as $key=>$subcategory)
          <tr class="even gradeC"> 
            <td>{{ $key + 1 }}</td> 
           <td>{{ $subcategory->name }}</td>
           <td>{{ $subcategory->category->name }}</td>
            <td>{{ $subcategory->created_at }}</td> 
            <td>{{ $subcategory->updated_at }}</td>
            <td> <a href="{{ route('admin.subcategory.edit',$subcategory->id) }}" class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>
              Edit
              </a> 

               <button onclick="document.getElementById('delete-form-{{ $subcategory->id }}').submit();" class="btn btn-danger btn-sm btn-icon icon-left"><i class="entypo-cancel"></i>Delete</button>

                <form id="delete-form-{{ $subcategory->id }}" method="POST" action="{{ route('admin.subcategory.destroy',$subcategory->id) }}" style="display="none">
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
              <th>Category Name</th>
              <th>Created At</th> 
              <th>Updated At</th> 
              <th>Action</th> 
            </tr> 
            </tfoot> 
          </table> 
          <br />

@endsection

