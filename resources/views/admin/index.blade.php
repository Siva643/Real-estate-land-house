@extends('admin.sidenavbar')
@section('content')
   <div>
    <form class="text-light">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="form6Example1">Property Type</label>
               <input type="text" id="form6Example1" class="form-control" />
            </div>
          </div>
          <div class="col">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="form6Example2">Location</label>
              <input type="text" id="form6Example2" class="form-control" />
            
            </div>
          </div>
        </div>
      
        <!-- Text input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form6Example3">Land Sqft</label>
          <input type="text" id="form6Example3" class="form-control" />
        </div>
      
        <!-- Text input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form6Example4">Price</label>
          <input type="text" id="form6Example4" class="form-control" />
        </div>
        
        
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form6Example5">Direction</label>
          <input type="email" id="form6Example5" class="form-control" />
        </div>
      
        <!-- Number input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form6Example6">Sand</label>
          <input type="number" id="form6Example6" class="form-control" />
        </div>
      
        <!-- Message input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form6Example7">Description</label>
          <textarea class="form-control" id="form6Example7" rows="4"></textarea>
        </div>
      
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
        
          {{-- <label class="form-check-label" for="form6Example8"> Create an account? </label>
          <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="form6Example8"
          checked
           />
          </div> --}}
      
        <!-- Submit button -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block w-100 mb-4">Place order</button>
      </form>
   </div>
@endsection