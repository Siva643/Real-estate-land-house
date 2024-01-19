@extends('admin.sidenavbar')
@section('content')

    <div class="container table-responsive" style="background-color: white;padding:40px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="d-flex justify-content-end">
       <a href="{{ url("/productadd") }}" class="btn btn-success slide_right mb-5">Add Property</a>
        </div>
      <table class="table  table-bordered text-dark">
           <th>ID</th>
           <th>SERIAL NUMBER</th>
           <th>PROPERTY TYPE</th>
           <th>LOCATION</th>
           <th>PROPERTY IMAGE</th>
           <th>CENT</th>
           <th>PRICE</th>
           <th>TOTAL SQUARE FEET</th>
           <th>LAND SQUARE FEET</th>
           <th>ROAD AREA</th>
           <th>HOW MANY FEET OF ROAD ?</th>
           <th>BREADTH & LENGTH</th>
           <th>DIRECTION</th>
           <th>DESCRIPTION</th>
           <th>UPDATE</th>
           <th>DELETE</th>
       </tr>
       @foreach($reads as $read)
       <tr>
           <td>{{$read->id}}</td>
           <td>{{$read->sno}}</td>
           <td>{{$read->propertytype}}</td>
           <td>{{$read->location}}</td>
           <td><img style="height:100px;width:100px;border-radius:50%;" src="{{ asset('images/'.$read->image) }}"></td>
           <td>{{$read->cent}}</td>
           <td>{{$read->price}}</td>
           <td>{{$read->totalsqft}}</td>
           <td>{{$read->landsqft}}</td>
           <td>{{$read->roadarea}}</td>
           <td>{{$read->howmanyfeetofroad}}</td>
           <td>{{$read->breadthandlength}}</td>
           <td>{{$read->direction}}</td>
           <td>{{$read->description}}</td>
           <td><a href="{{ url('edit/'.$read->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
           <td><a href="{{ url('delete/'.$read->id) }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>
       </tr>
       @endforeach
      </table>
    </div>

@endsection