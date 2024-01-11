<style>
    .custom-width {
        width: 150px; /* Adjust the width as needed */
        padding: 2px; /* Adjust the padding as needed */
        text-align: center;
        margin-right: 2px; /* Adjust the right margin as needed */
        margin-top: 1px;
        margin-bottom: 1px;
    }
</style>
<div class="preloader " style="text-align: center;background-color: #d1ecf1" >

   <div class="container">
       <div>
           <img src="{{asset('/')}}assets/frontend/includes/images/download-removebg-preview.png" alt="GTHS School">
       </div>
       <div>
           <div class=" mt-15">
               <h2 style="font-family: 'Times New Roman';color: black">GOJMOHAL TANNERY HIGH SCHOOL</h2>
           </div>
       </div>
   </div>
</div>

<section >
  <div class="container">

      <header>
          <div class="header-logo-support pt-3 pb-3 ">
              <div class="container-fluid">

                  <div class="row justify-content-between align-items-start">
                      @foreach($headers as $header)
                          <div class="logo d-flex">
                              <div>
                                  <a href="{{ route('home') }}" style="margin-left: 10px;">
                                      @if($header->image)
                                          <img src="{{ asset($header->image) }}" alt="Felna School" height="200" width="130" style="margin-top: 10px; margin: 0;">
                                      @else
                                          <img src="{{ asset('/')}}assets/frontend/includes/images/default.jpg" alt="Default_Header" height="200" width="130" style="margin-top: 10px; margin: 0;">
                                      @endif
                                  </a>
                              </div>

                              <div class="ml-1" style="margin-top: 10px;">
                                  <h2 style="margin-bottom: 3px; color:black;" class="mb-3">{{ $header->nameB }}</h2>
                                  <strong style="font-size: 45px; color:black; font-family:'Times New Roman'; line-height: 20px;" class="mt-5">{{ $header->nameE }}</strong>
                                  <strong style="color:black; margin-top: 16px;">{{$header->established}}</strong>
                              </div>
                          </div>
                      @endforeach

                      <div class="logo d-flex justify-content-end">
                          <div class="ml-1">

                                  <a href="{{ route('login') }}" class="btn btn-danger custom-width custom-width text-center">Log In</a>

                          </div>
                      </div>
                  </div> <!-- row -->

              </div> <!-- container -->
          </div> <!-- header logo support -->


      </header>

  </div>


</section>

