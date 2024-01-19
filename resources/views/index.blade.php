@extends('home')
@section('content')
  <!-- section start -->
  <section>
     <!-- background image slider -->
      <div id="container" style="background-image: url('{{asset('images/slider13.jpg')}}');">
     <!-- background image slider   end -->
     
     
     <!-- fade text -->
      <div class="text"> 
        <h1 id="h1" style="font-size:50px;">Find your perfact<br><span style="margin-left:90px;">Land & House</span></h1>
      </div>
      <!-- fade text end -->
     
      <!-- search bar -->
          <div class="" id="form" style="margin-top:30px;">
                  <div>
                    <form class="form-inner" style="display:flex;align-items:center;justify-content:center;">
                    <div class="form-group group">
                    <input type="text" style="background-color:white;border-radius:0%;width:200px;" readonly class="form-control" id="staticEmail2" value="Land & House">
                    </div>
                    <div class="form-group group" style="margin-left:10px;">
                        <select class="form-control" style="width:200px;background-color:white;border:none;border-radius:0%;width:300px;" id="exampleFormControlSelect1">
                            <option>Madurai</option>
                            <option>Vandiyur</option>
                            <option>Villapuram</option>
                            <option>Avaniyapuram</option>
                            <option>Nilaiyur</option>
                        </select>
                    </div>
                    <div>
                      <button class="button group" type="submit">Search</button>
                    </div>
                    </form>
                    </div>
                    </div>
           </div>
      
      </section>
        <!-- search bar end -->
        <!-- section end --> 


       {{-- section start --}}
        <section>
          <div class="container">
            <div>
                 <h1 class="text-center m-5">Properties</h1>
            </div>  

             <div class="row row-cols-1 row-cols-md-2 g-4 py-5" style="">
              @foreach($products as $product)
                 {{-- <div class="col-12 col-sm-12 col-md-6 mt-5" style=""> --}}
                <div class="col" style="">
                   <div class="card card-small" style="width: 32rem;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <a href=""><img style="width:100%;height:25vw;object-fit:cover;" class="card-img-top"  src="{{ asset('images/'.$product->image) }}" alt="Card image cap">
                  </a>
                  {{-- <img class="card-img-top"  style="width:100%;height:25vw;object-fit:cover;" src="{{URL::asset('/images/House1.jpg')}}" alt="Card image cap"> --}}
                    <div class="card-body" style="display:flex !important;flex-direction:column !important;">
                     
                      <h5 class="card-title text-center"><i class="fa-solid fa-location-dot"></i> {{ $product['location'] }}</h5><hr>
                      <span class="fw-bold text-center">Serial number {{ $product['sno']}}</span>
                      <span><i class="fa-solid fa-location-dot"></i> {{ $product['location']}}</span>
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                      <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                      </svg>{{ $product['price']}}</span>
                      <span  class="" style=""><i class="fa-solid fa-cent-sign"></i> Cent : {{ $product['cent']}}</span>
                      <span  class="" style=""><i class="fa-solid fa-square"></i> Total sqft : {{ $product['totalsqft']}}sqft</span>
                      <span><i class="fa-solid fa-square"></i> land sqft : {{ $product['landsqft']}}sqft</span>
                      <span><i class="fa-solid fa-road"></i> Road area : {{ $product['roadarea']}}sqft</span>
                      <span><i class="fa-solid fa-compass"></i> Direction : {{ $product['direction']}}</span>
                      <span>Size : {{ $product['breadthandlength']}}</span>
 
                      <span class="text-center"> {{ $product['howmanyfeetofroad']}}</span><hr>
                      <a href="#" style="border-radius:100px;"  class="btn btn-success w-100">View more details  <i class="fa-solid fa-arrow-right"></i></a>
                      <a href="#" style="border-radius:100px;"  class="btn btn-warning w-100 mt-3">Added To Favorite</a>

                    </div>
                  </div>
                 </div>
              @endforeach
            </div>
           
            </div>
        </section>
       {{-- section end --}}

@endsection