<title>Lists Cars</title>
@extends('layout')
@section('mainContent')
    <h1>List Cars</h1>
    <div class="table-responsive">
 <table class="table table-light table-striped">
     <thead class="bg-info text-light">
         <tr>
             <th>#</th>
             <th>ID</th>
             <th>Names</th>
             <th>Colors</th>
             <th>View</th>
             <th>Company</th>
             <th>Created At</th>
             <th>Updated At</th>
             <th>Action</th>
         </tr>
     </thead>
     <tbody>
        @foreach($cars as $car)
         <tr> 
            <td>{{$loop->index +1}}</td> 
            <td>{{$car->id}}</td> 
            <td>{{$car->name}}</td> 
            <td>{{$car->color}} </td> 
            <td> <i style="color:{{$car->color}};" class="fa fa-bus" aria-hidden="true"></i></td>
            <td>{{$car->company}}</td> 
            <td>{{$car->created_at->diffForHumans()}}</td>
            <td>{{$car->updated_at->diffForHumans()}}</td>
            <td>
           <a href="cars/{{$car->id}}" class="btn btn-info" title="Show"><i class="fa fa-eye" aria-hidden="true"></i></a>    
          </td>
         </tr>
        @endforeach
     </tbody>
 </table>
</div>

@endsection