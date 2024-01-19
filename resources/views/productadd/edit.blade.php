@extends('admin.sidenavbar')
@section('content')

    <div class="container mt-5 mb-5" style="background-color: white; padding:40px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <div class="d-flex justify-content-end">
    <a href="{{ url("/read") }}" class="btn btn-success slide_right mb-5">Show data</a>
     </div>
    <form action="{{ url('update/'.$edits->id) }}" class="fw-bold" method="post" style="margin-left:100px;" enctype="multipart/form-data">
      @csrf
       
           <div class="row">
      
            <div class="col-4">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">PROPERTY TYPE</label>
                  <input type="text" name="propertytype" value="{{$edits->propertytype}}" placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
           </div>
           <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">LOCATION</label>
              <input type="text" name="location" placeholder="" value="{{$edits->location}}" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PRICE</label>
                <input type="text" name="price" placeholder="" value="{{$edits->price}}" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              </div>
          
        
    
          </div>
    
          <div class="row">
          
            <div class="col-4">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">TOTAL SQUARE FEET</label>
                  <input type="text" name="totalsqft" value="{{$edits->totalsqft}}" placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
           </div>
           <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">LAND SQUARE FEET</label>
              <input type="text" name="landsqft" value="{{$edits->landsqft}}"  placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           </div>
         
          
           <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ROAD AREA</label>
              <input type="text" name="roadarea" value="{{$edits->roadarea}}" placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           </div>
         
          
         </div>
        
         <div class="row">
      
          <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SERIAL NUMBER</label>
                <input type="text" name="sno" value="{{$edits->sno}}"  placeholder="total square feet" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
         </div>
         <div class="col-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CENT</label>
            <input type="text" name="cent" value="{{$edits->cent}}" placeholder="breadth & length" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
         </div>
       
        
       
        
       </div>
              
         <div class="row">
          
          <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">HOW MANY FEET OF ROAD ?</label>
              <input type="text" name="howmanyfeetofroad" value="{{$edits->howmanyfeetofroad}}" placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           </div>
     
          <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">BREADTH & LENGTH</label>
              <input type="text" name="breadthandlength" value="{{$edits->breadthandlength}}" placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           </div>
          
          <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">DIRECTION</label>
              <input type="text" name="direction" value="{{$edits->direction}}" placeholder="" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           </div>
          
        
          </div>
         
         <div class="row">
          
          <div class="col-12">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">PROPERTY IMAGE</label>
                <img style="height:100px;width:100px;border-radius:50%;" src="{{ asset('images/'.$edits->image) }}">

                <input type="file" name="image"  placeholder="property type" required class="form-control w-80" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
         </div>
       
        
          </div>
    
              
         <div class="row">
          
          <div class="col-12">
              <div class="mb-3">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" required  name="description"   id="exampleFormControlTextarea1" rows="3">{{$edits->description}}</textarea>
                </div>   
              </div>
         </div>
       
        
          </div>
           
       
        <button type="submit" class="btn btn-success slide_right">Update Product</button>
    </form>
</div>
@endsection
