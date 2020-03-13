<title>Create Cars</title>
@extends('layout')
@section('mainContent')
    <h1>Create Cars</h1> 
    <hr>
<div class="container ">
 <form class="form-horizontal col-sm-12 m-auto col-md-5" action="create"  method="POST">
   @csrf
 <fieldset>
            <legend></legend>

      <div class="input-group">
        <div class="col-md-5 col-sm-12">
         <h4 class="font-weight-bold ">Name</h4>
        </div>
       <input class="form-control" type="text" name="name" placeholder="Enter name">
      </div> 
    <br>
      <div class="input-group">
        <div class="col-md-5 col-sm-12">
           <h4 class="font-weight-bold ">Color</h4>
        </div>
           <input class="form-control" type="text" name="color" placeholder="Enter name">
        </div> 
      
    <br>

     <div class="input-group ">
      <div class="col-md-5 col-sm-12">
        <h4 class="font-weight-bold">Company</h4>
      </div>
      <input class="form-control" type="text" name="company" placeholder="Enter name"> 
      </div>
      <div class="input-group col-12 mt-2">
        
      </div>  
      <div class="col-md-5 col-sm-12">
        <button type="submit" class="btn btn-primary">save</button>
</div>
     </div>
  </fieldset>
 </form>
 <a href="cars" class="btn text-primary">Show Cars</a>

</div>
@endsection