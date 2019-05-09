@extends('layouts.backend.app')


@section('content')

	<br /> <h3>Subcategory List</h3> <br />

	<table class="table table-bordered datatable" id="table-4">
    <thead> 
      <tr> 
        <th>Id</th> 
        <th>Product Name</th> 
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Product Quantity</th>
        <th>Product Category</th>
        <th>Product SubCategory</th>
        <th>Created At</th> 
        
        <th>Action</th> 
      </tr> 
    </thead>
       <tbody> 

        @foreach($products as $key=>$product)
          <tr class="even gradeC"> 
            <td>{{ $key + 1 }}</td> 
           <td>{{ $product->name }}</td>
           <td>
             
              
              <img width="100" src="{{ asset('product/'.$product->image) }}" alt="Card image"> 
                           
              
            
          </td>
           <td>{{ $product->price }}</td>
           <td>{{ $product->quantity }}</td>
           <td>{{ $product->category->name }}</td>
           <td>{{ $product->subcategory->name }}</td>
            <td>{{ $product->created_at }}</td> 
            
            <td> <a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>
              Edit
              </a> 

               <button onclick="document.getElementById('delete-form-{{ $product->id }}').submit();" class="btn btn-danger btn-sm btn-icon icon-left"><i class="entypo-cancel"></i>Delete</button>

                <form id="delete-form-{{ $product->id }}" method="POST" action="{{ route('admin.product.destroy',$product->id) }}" style="display="none">
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
                <th>Product Name</th> 
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Product Category</th>
                <th>Product SubCategory</th>
                <th>Created At</th> 
              
                <th>Action</th> 
            </tr>
            </tfoot> 
          </table> 
          <br />

@endsection

