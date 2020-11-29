
{{-- 
// Example starter JavaScript for disabling form submissions if there are invalid fields
    // (function() {
    // 'use strict';
    //   window.addEventListener('load', function() {
    //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
        
    //   }, false);
    // })(); --}}

{{-- // $("#post-submit").click(function(){

  //   const imagePayload={}
  //   photoArray.forEach((photo,index) => {
  //     imagePayload[`image-${index}`] = photo
  //   });
  //   console.log(JSON.stringify(imagePayload))

  //   $("#photo-array").val(JSON.stringify(imagePayload));

  //   var adForm = document.getElementById('ad-form');

  //   $("#more-image").val("");
    
  //   if(validation(adForm)){
  //     adForm.submit();
  //   } 

  // }) --}}


  
{{-- // Validation
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })(); --}}


{{-- Check if user is logged in --}}

{{-- <script>
  $(function(){
    var loggedin = {{ auth()->check() ? 'true' : 'false' }};
    $("#post-submit").click(function(e){
      e.preventDefault();
      if(loggedin){
        alert("Form Posted");
      }
      else{
        $('#modal-signin').modal('show');
      }
    })
  })
</script> --}}

{{---------------------- Post Main Image Preview ----------------------}}

{{-- <script>
    $(document).ready(function() {
  
     
    });
</script> --}}





<script>
    //=============================== Main image preview ================================ //
    
    // var inputFile = document.getElementById('post-image');
    // var adImageInputWrapper = document.getElementById('ad-image-input-wrapper');
  
    // inputFile.addEventListener('change', function(){

    //   var file = this.files[0];
    //   console.log(file);

    //   if (file) {
    //     const reader = new FileReader();
        
    //     adImageInputWrapper.style.display = 'none';

    //     console.log("reader");
    //     console.log(reader);

    //     reader.addEventListener('load',function(){
    //       var mainPicFile = event.target;
    //       $('#photo-form').prepend("<div class='col-sm-3 image-preview-wrapper mb-3' style='display: block'><div class='image-preview border d-flex' id='more-image-preview' style='border: 2px solid rgb(0, 189, 0) !important; box-shadow: 1px 1px 10px rgb(0, 196, 0)''><img class='more-image-preview_image' src='"+ mainPicFile.result + "'" +
    //       "><div  class='post-thumb'><div class='inner-post-thumb'><a href='javascript:void(0);' class='remove-pic' id='remove-main-pic'><i class='fa fa-times' aria-hidden='true'></i></a><div></div></div></div>");
    //     });
    //     reader.readAsDataURL(file);
    //   }
    //   else{
    //     previewContainer.style.display = null;
    //     previewImage.style.display = null;
    //   }
    // });

    // =============================== Main image remove ================================ //

    // $('body').on('click', '#remove-main-pic', function() {
    //   $(this).parent().parent().parent().parent().remove();
      
    //   $("#post-image").val("");
    //   adImageInputWrapper.style.display = 'block';
    // });                                                                     
</script>






<nav class="sidebar">
  <!-- Toggler -->
  <div class=" rounded filter p-4 border bg-transparent w-25">
    <h5> <i class="fal fa-sliders-h mr-3"></i> Filter your search</h5><br>
    
    <form>
      {{-- Location --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-location" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom pb-2 d-flex justify-content-between">
          <label class=" section-label mb-0" for=""><span class="mr-3"><i class="fal fa-map-marker-alt fa-lg"></i></span>Location</label>
          <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row mb-0 collapse" id="filter-location">
        <div class="form-group col-12 mb-0 mt-3">
          <div class="input-group form-group rounded mb-0">
            <div class="input-group-prepend">
              <div class="input-group-text bg-transparent text-muted"><i class="far fa-search"></i></div>
            </div>
            <input type="text" class="form-control" id="location" placeholder="Location">
          </div>
          <div class="invalid-feedback"></div>
        </div>
      </div><br>

      {{-- Category --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-type" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class=" section-label mb-0" for=""><span class="mr-3"><i class="fal fa-clipboard-list-check fa-lg"></i></span>Type</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row mb-0 collapse" id="filter-type">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-any" name="filter_type" value="any">
            <label class="custom-control-label" for="radio-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-single-room" name="filter_type" value="1">
            <label class="custom-control-label" for="radio-single-room">Single Room</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-share-room" name="filter_type" value="2">
            <label class="custom-control-label" for="radio-share-room">Share a room</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-sublet" name="filter_type" value="3">
            <label class="custom-control-label" for="radio-sublet">Sublet</label>
          </div>


         <div class="custom-control custom-radio">
           <input type="radio" class="custom-control-input" id="radio-hostel" name="filter_type" value="hostel">
           <label class="custom-control-label" for="radio-hostel">Hostel</label>
         </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>


      {{-- Price --}}
      <a class="collapsed" data-toggle="collapse" href="#filter-price" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-dollar-sign fa-lg"></i></span> Price</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-price">

        <div class="col-md-6 mt-3">
          <input type="text" class="form-control price" id="min" placeholder="Min" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>

        {{-- max --}}
        <div class="col-md-6 mt-3">
          <input type="text" class="form-control price" id="max" placeholder="Max" required>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
      </div><br>


      {{-- Profession --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-gender" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-female fa-lg"></i></span> Gender</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-gender">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input gender" id="radio-gender-any" name="filter_gender" value="">
            <label class="custom-control-label" for="radio-gender-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input gender" id="radio-male" name="filter_gender" value="male">
            <label class="custom-control-label" for="radio-male">Male</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input gender" id="radio-female" name="filter_gender" value="female">
            <label class="custom-control-label" for="radio-female">Female</label>
          </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>

      {{-- Profession --}}
      <a class="collapsed" data-toggle="collapse" href="#filter-profession" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-user-tie fa-lg"></i></span>Profession</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-profession">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input profession" id="radio-prof-any" name="filter_profession" value="">
            <label class="custom-control-label" for="radio-prof-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input profession" id="radio-student" name="filter_profession" value="student">
            <label class="custom-control-label" for="radio-student">Student</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input profession" id="radio-service-holder" name="filter_profession" value="service_holder">
            <label class="custom-control-label" for="radio-service-holder">Service Holder</label>
          </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>

      {{-- Smoker --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-smoker" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-smoking-ban fa-lg"></i></span>Smoker</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-smoker">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" id="smoker-any" name="filter_smoker" class="custom-control-input smoker" value="">
            <label class="custom-control-label" for="smoker-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="smoker-yes" name="filter_smoker" class="custom-control-input smoker" value="smoker">
            <label class="custom-control-label" for="smoker-yes">Yes</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="smoker-no" name="filter_smoker" class="custom-control-input smoker" value="non_smoker">
            <label class="custom-control-label" for="smoker-no">No</label>
          </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>

      {{-- Religion --}}
      <a class="collapsed" data-toggle="collapse" href="#filter-religion" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-pray fa-lg"></i></span> Religion</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-religion">
        <div class="form-group col-12 mb-0 mt-3">
            <input type="text" class="form-control" id="religion" placeholder="Religion">
          <div class="invalid-feedback">Select available seats</div>
        </div>
      </div><br>

      {{-- Facilities --}}
      <a class="collapsed" id="filter-btn-facilities" data-toggle="collapse" href="#filter-facilities" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-bath fa-lg"></i></span>Facilities</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse mb-0 facilities" id="filter-facilities">

        <div class="form-group mb-0 mt-3 col-12 ">

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="bath">
            <label class="custom-control-label" for="bath">Attached Bathroom</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="balcony">
            <label class="custom-control-label" for="balcony">Balcony</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="elevetor">
            <label class="custom-control-label" for="elevetor">Lift</label>
          </div>


          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="security">
            <label class="custom-control-label" for="security">Security</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="parking">
            <label class="custom-control-label" for="parking">Parking Space</label>
          </div>


          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div>

      {{-- <div class="form-row">
        <div class="form-group col-12 d-flex justify-content-center">
          <button class="btn btn-success px-5" type="submit">Apply</button>
        </div>
      </div> --}}

    </form>
  </div>
</nav>











{{-- Filter --}}

<div class="col-lg-3 p-0 filter-wrapper">
      
  <div class=" rounded filter p-4 border bg-transparent">
    <h5> <i class="fal fa-sliders-h mr-3"></i> Filter your search</h5><br>

    <form>
      {{-- Location --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-location" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom pb-2 d-flex justify-content-between">
          <label class=" section-label mb-0" for=""><span class="mr-3"><i class="fal fa-map-marker-alt fa-lg"></i></span>Location</label>
          <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row mb-0 collapse" id="filter-location">
        <div class="form-group col-12 mb-0 mt-3">
          <div class="input-group form-group rounded mb-0">
            <div class="input-group-prepend">
              <div class="input-group-text bg-transparent text-muted"><i class="far fa-search"></i></div>
            </div>
            <input type="text" class="form-control" id="location" placeholder="Location">
          </div>
          <div class="invalid-feedback"></div>
        </div>
      </div><br>

      {{-- Category --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-type" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class=" section-label mb-0" for=""><span class="mr-3"><i class="fal fa-clipboard-list-check fa-lg"></i></span>Type</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row mb-0 collapse" id="filter-type">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-any" name="filter_type" value="any">
            <label class="custom-control-label" for="radio-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-single-room" name="filter_type" value="1">
            <label class="custom-control-label" for="radio-single-room">Single Room</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-share-room" name="filter_type" value="2">
            <label class="custom-control-label" for="radio-share-room">Share a room</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input type" id="radio-sublet" name="filter_type" value="3">
            <label class="custom-control-label" for="radio-sublet">Sublet</label>
          </div>


         {{-- <div class="custom-control custom-radio">
           <input type="radio" class="custom-control-input" id="radio-hostel" name="filter_type" value="hostel">
           <label class="custom-control-label" for="radio-hostel">Hostel</label>
         </div> --}}

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>


      {{-- Price --}}
      <a class="collapsed" data-toggle="collapse" href="#filter-price" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-dollar-sign fa-lg"></i></span> Price</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-price">

        <div class="col-md-6 mt-3">
          <input type="text" class="form-control price" id="min" placeholder="Min" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>

        {{-- max --}}
        <div class="col-md-6 mt-3">
          <input type="text" class="form-control price" id="max" placeholder="Max" required>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
      </div><br>


      {{-- Profession --}}

      <a class="collapsed" data-toggle="collapse" href="#filter-gender" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-female fa-lg"></i></span> Gender</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-gender">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input gender" id="radio-gender-any" name="filter_gender" value="">
            <label class="custom-control-label" for="radio-gender-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input gender" id="radio-male" name="filter_gender" value="male">
            <label class="custom-control-label" for="radio-male">Male</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input gender" id="radio-female" name="filter_gender" value="female">
            <label class="custom-control-label" for="radio-female">Female</label>
          </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>

      {{-- Profession --}}
      <a class="collapsed" data-toggle="collapse" href="#filter-profession" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-user-tie fa-lg"></i></span>Profession</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-profession">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input profession" id="radio-prof-any" name="filter_profession" value="">
            <label class="custom-control-label" for="radio-prof-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input profession" id="radio-student" name="filter_profession" value="student">
            <label class="custom-control-label" for="radio-student">Student</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input profession" id="radio-service-holder" name="filter_profession" value="service_holder">
            <label class="custom-control-label" for="radio-service-holder">Service Holder</label>
          </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br>

      {{-- Smoker --}}

      {{-- <a class="collapsed" data-toggle="collapse" href="#filter-smoker" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-smoking-ban fa-lg"></i></span>Smoker</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-smoker">

        <div class="form-group col-12 mb-0 mt-3">

          <div class="custom-control custom-radio">
            <input type="radio" id="smoker-any" name="filter_smoker" class="custom-control-input smoker" value="">
            <label class="custom-control-label" for="smoker-any">Any</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="smoker-yes" name="filter_smoker" class="custom-control-input smoker" value="smoker">
            <label class="custom-control-label" for="smoker-yes">Yes</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="smoker-no" name="filter_smoker" class="custom-control-input smoker" value="non_smoker">
            <label class="custom-control-label" for="smoker-no">No</label>
          </div>

          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div><br> --}}

      {{-- Religion --}}
      {{-- <a class="collapsed" data-toggle="collapse" href="#filter-religion" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-pray fa-lg"></i></span> Religion</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse" id="filter-religion">
        <div class="form-group col-12 mb-0 mt-3">
            <input type="text" class="form-control" id="religion" placeholder="Religion">
          <div class="invalid-feedback">Select available seats</div>
        </div>
      </div><br> --}}

      {{-- Facilities --}}
      <a class="collapsed" id="filter-btn-facilities" data-toggle="collapse" href="#filter-facilities" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="form-row border-bottom justify-content-between py-2">
            <label class="section-label mb-0" for=""><span class="mr-3"><i class="fal fa-bath fa-lg"></i></span>Facilities</label>
            <span class="down-icon"><i class="fal fa-angle-up fa-lg"></i> </span>
        </div>
      </a>

      <div class="form-row collapse mb-0 facilities" id="filter-facilities">

        <div class="form-group mb-0 mt-3 col-12 ">

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="bath">
            <label class="custom-control-label" for="bath">Attached Bathroom</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="balcony">
            <label class="custom-control-label" for="balcony">Balcony</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="elevetor">
            <label class="custom-control-label" for="elevetor">Lift</label>
          </div>


          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="security">
            <label class="custom-control-label" for="security">Security</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input facilities" id="parking">
            <label class="custom-control-label" for="parking">Parking Space</label>
          </div>


          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div>

      {{-- <div class="form-row">
        <div class="form-group col-12 d-flex justify-content-center">
          <button class="btn btn-success px-5" type="submit">Apply</button>
        </div>
      </div> --}}

    </form>
  </div>

</div>












{{-- Post Card --}}
<div class="card mb-3 post-card" onclick="location.href='/details'">
  {{-- Card Image --}}
  <div class="row no-gutters">
    <div class="col-sm-6 text-center">
        <div class="cardImage-wrapper p-2">
          <img src="/images/card/card-1.jpg" class="card-img img-fluid cardImage bg-transparent" alt="No image"/>     
        </div>
    </div>
    {{-- Card Body --}}
    <div class="col-sm-6">
      <div class="card-body">
        <button class="btn btn-primary bg-transparent border-0 favorite-btn float-right">
          <i class="far fa-heart fa-lg" style="color: #FF847C;"></i>
          <i class="fa fa-heart fa-lg" style="color: #FF847C;"></i>
        </button>
        
        <h4 class="card-title"> <small style="font-size: 1rem"></small>৳ 5000</h4>
        <p class="card-text">{{--<i class="fal fa-bed-alt fa-lg mr-4"></i>--}}<span style="font-weight: 600">Single Room</span></p>
        <p class="card-text"><i class="fal fa-calendar-alt fa-lg mr-4"></i>Available from: <span style="font-weight: 600">18 August, 2020</span> </p>
        {{-- <span class="card-text"> Available Seats: 2</span> --}}
        <p class="card-text"><i class="fal fa-user fa-lg mr-4"></i>Female</p>
        <p class="card-text"><i class="fal fa-map-marker-alt fa-lg mr-4"></i>7/A Dhanmondi</p>
        <div class="d-flex bottom-btn">
          <button class="btn btn-success mr-3">View Details</button>
          <button class="btn btn-success" type="button" onclick="location.href='#'">Contact</button>
        </div>
      </div>
    </div>
  </div>{{-- Card-Row --}}
  
</div>{{-- Card --}}




 {{-- Pagination --}}
    {{-- <div class="d-flex my-5 px-3 bg-transparent justify-content-around pagination ad-nav">
      <div class="my-auto d-flex">


        <button class="btn btn-outline-secondary ml-3"><i class="fal fa-chevron-left"></i></button>

        <button class="btn btn-outline-secondary ml-3">1</button>
        <button class="btn btn-outline-secondary ml-3">2</button>
        <button class="btn btn-outline-secondary ml-3">3</button>
        <button class="btn btn-outline-secondary ml-3">4</button>
        <button class="btn btn-outline-secondary ml-3">5</button>


        <button class="btn btn-outline-secondary ml-3"><i class="fal fa-chevron-right"></i></button>

      </div>

    </div> --}}



    <div class='col-sm-3 image-preview-wrapper mb-3' style='display: block'>
      
      <div class='image-preview border d-flex' id='more-image-preview'>
        
        <img class='more-image-preview_image' src='"+ picFile.result + "'" + "title='" + picFile.name + "'>
        
        <div class='post-thumb'>
          <div class='inner-post-thumb'>
            <a href='javascript:void(0);' data-id='" + event.target.fileName + "' base-id='" + picFile.result + "' class='remove-pic' id='remove-more-pic'>
              <i class='fa fa-times' aria-hidden='true'></i>
            </a>
          </div>
        </div>

        <div class='post-base'>
          <a href='#' id='select-base' class='btn btn-outline-light btn-base' base-id='" + picFile.result + "' > 
            Make thumbnail 
          </a>
        </div>
  
        <span class='base-selected' style='display: none'>Thumbnail</span>
      
      </div>

    </div>















    <div class="col-lg-3 p-0 pr-lg-4 filter-wrapper sticky-top">

      {{--===================== Left filter ==========================--}}

      <div class="rounded sticky-top filter left-filter d-flex d-sm-flex d-md-flex d-lg-block p-lg-4 p-0 p-md-0 p-sm-0 border">

        {{-- <label for="" class="ml-4 mb-4"><i class="fal fa-filter  mr-3"></i> Filter here</label> --}}

        <div class="dropright">

          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-location-link" data-toggle="dropdown" data-offset="0, 30" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-map-marker-alt mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Location</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="location-menu dropdown-menu fade" aria-labelledby="dropdown-location-link" style=" height: 180px">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Type a location</label>
            <hr>

            <div class="input-group mt-4" style="margin-top: 10px">

              <input type="text" id="location" class="form-control border border-success" placeholder="Ex. Mirpur-12" aria-label="" aria-describedby="basic-addon1">
              <div class="input-group-append">
                <button class="btn btn-success" type="button"><i class="fal fa-search"></i></button>
              </div>
            </div>
          </div>
        </div> {{-- dropright  --}}


        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="" role="button" id="dropdown-type-link" data-toggle="dropdown" data-offset="0, 30" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-home mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Type</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="type-menu dropdown-menu fade" aria-labelledby="dropdown-type-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Select a Type</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between px-4">

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-any" name="filter_type" value="any">
                <label class="round-control-label" for="radio-any">Any</label>
              </div>

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-single-room" name="filter_type" value="1">
                <label class="round-control-label" for="radio-single-room">Single Room</label>
              </div>

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-sublet" name="filter_type" value="3">
                <label class="round-control-label" for="radio-sublet">Sublet</label>
              </div>

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-share-room" name="filter_type" value="2">
                <label class="round-control-label" for="radio-share-room">Share room</label>
              </div>


              {{-- <div class="round-radio-item">
                <input type="radio" class="round-radio-input" id="radio-hostel" name="filter_type" value="hostel">
                <label class="round-control-label" for="radio-hostel">Hostel</label>
              </div> --}}

              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            
            <button class="btn btn-success float-right mt-4">Done</button>

          </div>
        </div>{{-- dropright  --}}


        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="" role="button" id="dropdown-rent-link" data-toggle="dropdown" data-offset="0, 30" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-usd-circle mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Rent</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="rent-menu dropdown-menu fade" aria-labelledby="dropdown-rent-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Enter preferred rent</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between px-4">

              <div class="col-6">
                <input type="text" class="form-control price border border-success" id="min" placeholder="Min" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>

              <div class=" col-6">
                <input type="text" class="form-control price border border-success" id="max" placeholder="Max" required>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>

            <button class="btn btn-success float-right mt-4">Done</button>


          </div>
        </div>{{-- dropright  --}}



        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-gender-link" data-toggle="dropdown" data-offset="0, 30" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-user mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Gender</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="gender-menu dropdown-menu fade" aria-labelledby="dropdown-gender-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Select a Gender</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between px-5">

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input gender" id="radio-gender-any" name="filter_gender" value="">
                <label class="round-control-label" for="radio-gender-any">Any</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input gender" id="radio-male" name="filter_gender" value="male">
                <label class="round-control-label" for="radio-male">Male</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input gender" id="radio-female" name="filter_gender" value="female">
                <label class="round-control-label" for="radio-female">Female</label>
              </div>

            </div>

            <button class="btn btn-success float-right mt-4">Done</button>

          </div>
        </div>{{-- dropright  --}}



        <div class="dropright">
          <a class=" dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-profession-link" data-toggle="dropdown" data-offset="0, 30" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-graduation-cap mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Profession</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="profession-menu dropdown-menu fade" aria-labelledby="dropdown-profession-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Select a Profession</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between">

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input profession" id="radio-prof-any" name="filter_profession" value="">
                <label class="round-control-label" for="radio-prof-any">Any</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input profession" id="radio-student" name="filter_profession" value="student">
                <label class="round-control-label" for="radio-student">Student</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input profession" id="radio-service-holder" name="filter_profession" value="service_holder">
                <label class="round-control-label" for="radio-service-holder">Service Holder</label>
              </div>

              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <button class="btn btn-success float-right mt-4">Done</button>

          </div>
        </div>{{-- dropright  --}}


        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-facilities-link" data-toggle="dropdown" data-offset="0, 30" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-bath mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Facilities</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a>

          <div class="facilities-menu dropdown-menu fade" aria-labelledby="dropdown-facilities-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Choose facilities (Multiple)</label>
            <hr>

            <div class="form-group mb-0 col-12 mt-4 d-flex flex-wrap justify-content-between px-4">

              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="balcony">
                <label class="round-control-label" for="balcony">Balcony</label>
              </div>

              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="elevetor">
                <label class="round-control-label" for="elevetor">Lift</label>
              </div>


              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="security">
                <label class="round-control-label" for="security">Security</label>
              </div>


              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="bath">
                <label class="round-control-label" for="bath">Attach Bath</label>
              </div>

              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="parking">
                <label class="round-control-label" for="parking">Parking Space</label>
              </div>

            </div>

            <button class="btn btn-success float-right mt-4">Done</button>


          </div>
        </div>{{-- dropright  --}}



      </div>

    </div> {{--filter col-3--}}





















    <div class="col-lg-3 p-0 pr-lg-4 filter-wrapper sticky-top">

      {{--===================== Left filter ==========================--}}

      <div class="rounded sticky-top filter left-filter d-flex d-sm-flex d-md-flex d-lg-block p-lg-4 p-0 p-md-0 p-sm-0 border">

        {{-- <label for="" class="ml-4 mb-4"><i class="fal fa-filter  mr-3"></i> Filter here</label> --}}

        <div class="dropright">

          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-location-link" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-map-marker-alt mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Location</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="location-menu custom-dropdown-menu" aria-labelledby="dropdown-location-link" style=" height: 180px">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Type a location</label>
            <hr>

            <div class="input-group mt-4" style="margin-top: 10px">

              <input type="text" id="location" class="form-control border border-success" placeholder="Ex. Mirpur-12" aria-label="" aria-describedby="basic-addon1">
              <div class="input-group-append">
                <button class="btn btn-success" type="button"><i class="fal fa-search"></i></button>
              </div>
            </div>
          </div>
        </div> {{-- dropright  --}}


        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="" role="button" id="dropdown-type-link" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-home mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Type</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="type-menu custom-dropdown-menu" aria-labelledby="dropdown-type-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Select a Type</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between px-4">

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-any" name="filter_type" value="any">
                <label class="round-control-label" for="radio-any">Any</label>
              </div>

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-single-room" name="filter_type" value="1">
                <label class="round-control-label" for="radio-single-room">Single Room</label>
              </div>

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-sublet" name="filter_type" value="3">
                <label class="round-control-label" for="radio-sublet">Sublet</label>
              </div>

              <div class="round-radio-item  mb-2">
                <input type="radio" class="round-radio-input type" id="radio-share-room" name="filter_type" value="2">
                <label class="round-control-label" for="radio-share-room">Share room</label>
              </div>


              {{-- <div class="round-radio-item">
                <input type="radio" class="round-radio-input" id="radio-hostel" name="filter_type" value="hostel">
                <label class="round-control-label" for="radio-hostel">Hostel</label>
              </div> --}}

              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            
            <button class="btn btn-success float-right mt-4">Done</button>

          </div>
        </div>{{-- dropright  --}}


        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="" role="button" id="dropdown-rent-link" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-usd-circle mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Rent</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="rent-menu custom-dropdown-menu" aria-labelledby="dropdown-rent-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Enter preferred rent</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between px-4">

              <div class="col-6">
                <input type="text" class="form-control price border border-success" id="min" placeholder="Min" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>

              <div class=" col-6">
                <input type="text" class="form-control price border border-success" id="max" placeholder="Max" required>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>

            <button class="btn btn-success float-right mt-4">Done</button>


          </div>
        </div>{{-- dropright  --}}



        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-gender-link" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-user mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Gender</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="gender-menu custom-dropdown-menu" aria-labelledby="dropdown-gender-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Select a Gender</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between px-5">

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input gender" id="radio-gender-any" name="filter_gender" value="">
                <label class="round-control-label" for="radio-gender-any">Any</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input gender" id="radio-male" name="filter_gender" value="male">
                <label class="round-control-label" for="radio-male">Male</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input gender" id="radio-female" name="filter_gender" value="female">
                <label class="round-control-label" for="radio-female">Female</label>
              </div>

            </div>

            <button class="btn btn-success float-right mt-4">Done</button>

          </div>
        </div>{{-- dropright  --}}



        <div class="dropright">
          <a class=" dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-profession-link" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-graduation-cap mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Profession</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a><hr>

          <div class="profession-menu custom-dropdown-menu" aria-labelledby="dropdown-profession-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Select a Profession</label>
            <hr>

            <div class="form-group col-12 mb-0 mt-4 d-flex flex-wrap justify-content-between">

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input profession" id="radio-prof-any" name="filter_profession" value="">
                <label class="round-control-label" for="radio-prof-any">Any</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input profession" id="radio-student" name="filter_profession" value="student">
                <label class="round-control-label" for="radio-student">Student</label>
              </div>

              <div class="round-radio-item">
                <input type="radio" class="round-radio-input profession" id="radio-service-holder" name="filter_profession" value="service_holder">
                <label class="round-control-label" for="radio-service-holder">Service Holder</label>
              </div>

              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <button class="btn btn-success float-right mt-4">Done</button>

          </div>
        </div>{{-- dropright  --}}


        <div class="dropright">
          <a class="dropdown-toggle border-success px-lg-4 px-md-1 py-2 d-inline-block" href="#" role="button" id="dropdown-facilities-link" aria-haspopup="true" aria-expanded="false">
            <i class="fal fa-bath mr-lg-3 mr-md-1 mr-sm-0 mr-0 filter-icon"></i> <span>Facilities</span> <i class="fal fa-angle-right mt-1 float-right"></i>
          </a>

          <div class="facilities-menu custom-dropdown-menu" aria-labelledby="dropdown-facilities-link">

            <label for="" class="text-muted"><i class="fal fa-filter mr-3"></i>Choose facilities (Multiple)</label>
            <hr>

            <div class="form-group mb-0 col-12 mt-4 d-flex flex-wrap justify-content-between px-4">

              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="balcony">
                <label class="round-control-label" for="balcony">Balcony</label>
              </div>

              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="elevetor">
                <label class="round-control-label" for="elevetor">Lift</label>
              </div>


              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="security">
                <label class="round-control-label" for="security">Security</label>
              </div>


              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="bath">
                <label class="round-control-label" for="bath">Attach Bath</label>
              </div>

              <div class="round-check-item mb-3">
                <input type="checkbox" class="round-check-input facilities" id="parking">
                <label class="round-control-label" for="parking">Parking Space</label>
              </div>

            </div>

            <button class="btn btn-success float-right mt-4">Done</button>


          </div>
        </div>{{-- dropright  --}}



      </div>

    </div> {{--filter col-3--}}