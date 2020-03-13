<title>Edit Cars</title>
@extends('layout')
@section('mainContent')
    <h1>Edit {{$car->name}}</h1> 
    <hr>
<div class="container">
 <form class="form-horizontal col-sm-12 m-auto col-md-5" action="update"  method="Post">
   @csrf
   @method('PUT')
 <fieldset>
            <legend></legend>

      <div class="input-group">
        <div class="col-md-5 col-sm-12">
         <h4 class="font-weight-bold ">Name</h4>
        </div>
       <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$car->name}}">
      </div> 
    <br>
      <div class="input-group">
        <div class="col-md-5 col-sm-12">
           <h4 class="font-weight-bold ">Color</h4>
        </div>
           <input class="form-control" type="text" name="color" placeholder="Enter message" value="{{$car->color}}">
        </div> 
      
    <br>

     <div class="input-group ">
      <div class="col-md-5 col-sm-12">
        <h4 class="font-weight-bold">Company</h4>
      </div>
      <input class="form-control" type="text" name="company" placeholder="Enter company" value="{{$car->company}}"> 
      </div>
      <div class="input-group col-12 mt-2">
        
      </div>  
      <div class="col-md-5 col-sm-12">
        <button type="submit" class="btn btn-info">Update</button>
</div>
    
     </div>
  </fieldset>
 </form>
 
<a class="btn btn-danger" href="delete">Delete3</a>
@endsection