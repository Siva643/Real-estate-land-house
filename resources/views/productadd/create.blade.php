@extends('admin.sidenavbar')
@section('content')


      <section class="mt-5 mb-5" style="background-color: white;padding:30px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="d-flex justify-content-end">
    <a href="{{ url("/read") }}" class="btn btn-success slide_right">Show data</a>
     </div>
     <form action="{{ route('create') }}"  class="form-groups  text-dark fw-bold" method="post"  style="margin-left:100px;" enctype="multipart/form-data">
      @csrf
      <div class="row">\

       <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">PROPERTY TYPE</label>
              <input type="text" name="propertytype"  placeholder="property type" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
       </div>
       <div class="col-4">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">LOCATION</label>
          <input type="text" name="location" placeholder="location" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRICE</label>
            <input type="text" name="price" placeholder="price" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        
      
    

      </div>

      <div class="row">
      
        <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">TOTAL SQUARE FEET</label>
              <input type="text" name="totalsqft"  placeholder="total square feet" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
       </div>
       <div class="col-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">LAND SQUARE FEET</label>
          <input type="text" name="landsqft"  placeholder="breadth & length" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       </div>
     
      
       <div class="col-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ROAD AREA</label>
          <input type="text" name="roadarea"  placeholder="roadarea" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       </div>
     
      
     </div>

          

     <div class="row">
      
      <div class="col-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">SERIAL NUMBER</label>
            <input type="text" name="sno"  placeholder="total square feet" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
     </div>
     <div class="col-4">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CENT</label>
        <input type="text" name="cent"  placeholder="breadth & length" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
     </div>
   
    
   
    
   </div>


     <div class="row">
      
      <div class="col-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">HOW MANY FEET OF ROAD ?</label>
          <input type="text" name="howmanyfeetofroad" placeholder="howmanyfeetofroad?" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       </div>

      <div class="col-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">BREADTH & LENGTH</label>
          <input type="text" name="breadthandlength" placeholder="breadth&length" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       </div>
      
      <div class="col-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">DIRECTION</label>
          <input type="text" name="direction" placeholder="direction" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       </div>
      
    
      </div>
     
     <div class="row">
      
      <div class="col-12">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PROPERTY IMAGE</label>
            <input type="file" name="image"  placeholder="property type" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
     </div>
   
    
      </div>

          
     <div class="row">
      
      <div class="col-12">
          <div class="mb-3">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="description" placeholder="description..." id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>   
          </div>
     </div>
   
    
      </div>

        <button type="submit" class="btn btn-success slide_right">Add Property</button>
    </form>
  </section>
@endsection
