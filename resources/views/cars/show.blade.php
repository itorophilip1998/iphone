<title>Show id</title>
@extends('layout')
@section('mainContent')
     <br> 
     <div class="container">
        <div class="details font-weight-bold  col-10 m-auto">
            <h1>Show Car Details</h1>
            <h3 class="font-weight-bold">Name:    <span class="text-info">C</span></h3> 
            <h3 class="font-weight-bold">Color :  <span class="text-info">{{$car->color}}</span> </h3>
            <h3 class="font-weight-bold">Company: <span class="text-info">{{$car->name}}</span></h3>
            <h3 class="font-weight-bold">Views:  <i style="color:{{$car->color}};" class="fa fa-bus" aria-hidden="true"></i></h3>
        
    </div>
    <a href="{{ url('/create') }}">home</a>
    <a href="{{$car->id}}/edit">Edit</a>

     </div>
   
@endsection