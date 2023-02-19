<?php
include "../config/db_connect.php";

?>
<div class="container mt-3">
  <h2>Registration </h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">New Registration</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Faculty</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Manaagement</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Student</a>
    </li> -->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <form id="registrationForm">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                    <h1 id="resmessage" class="text-danger"></h1>
                  <div class="mb-6 pb-2">
                  <div class="form-group">
                        <label for="sel1">Select User Type:<span class="text-danger">*</span></label>
                        <select class="form-control" id="usertype">
                            <option seelected >Student</option>
                            <option>Faculty</option>
                           
                        </select>
                        </div> 
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="fname" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="fname">First name <span class="text-danger">*</span></label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="lname" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="lname">Last name<span class="text-danger">*</span></label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="mname" class="form-control form-control-lg input-forms" />
                        <label class="form-label" for="mname">Middle name</label>
                      </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input 
                        type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" 
                        id="age" class="form-control form-control-lg input-forms" />
                        <label class="form-label" for="age">Age<span class="text-danger">*</span></label>
                      </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                    <label class="form-label" for="bdate">Birth Date<span class="text-danger">*</span></label>
                        <input type= "text" id="bdate" placeholder= "Select a Date"
                        class="form-control form-control-lg input-forms"
                        >
                    </div>
                    </div>

                   
                   
                  </div>


                  <div class="row">
                        <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                            <div class="form-outline">
                            <label class="form-label" >Gender<span class="text-danger">*</span></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="male" checked value="male">Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">Female
                                </label>
                            </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">

                            <div class="form-outline">
                                <textarea type="text" id="homeadd" class="form-control form-control-lg input-forms" required></textarea>
                                <label class="form-label" for="homeadd">Home Address<span class="text-danger">*</span></label>
                            </div>

                            </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-primary text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>


                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input  
                        type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" 
                        id="zipcode" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="zipcode">Zip Code<span class="text-danger">*</span></label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="province" class="form-control form-control-lg input-forms" required/>
                        <label class="form-label" for="province">Province</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="country" class="form-control form-control-lg input-forms" required/>
                      <label class="form-label" for="country">Country</label>
                    </div>
                  </div>

                  
                    
                    <div class="mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input
                        type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" 
                        id="phone_number" class="form-control form-control-lg input-forms" required
                        maxlength = "11"
                        />
                        <label class="form-label" for="phone_number">Phone Number<span class="text-danger">*</span></label>
                      </div>

                    </div>
                  

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="email" id="email" class="form-control form-control-lg input-forms" />
                      <label class="form-label" for="email">Email</label>
                    </div>
                  </div>

                    <br><br>
                    <br>
                                      <button type="button" class="btn btn-light btn-lg btn-block"
                    data-mdb-ripple-color="dark" id="register">Register</button>

                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Faculty List</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Manaagement List</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Student List</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div><!-- / .row -->




</script>

<script>
    flatpickr("#bdate", {});

    $("#register").on('click', function(e){
        e.preventDefault();
        var datas  =  {
            fname : document.getElementById("fname").value,
            lname : document.getElementById("lname").value,
            mname : document.getElementById("mname").value,
            age : document.getElementById("age").value,
            bdate : document.getElementById("bdate").value,
            homeadd : document.getElementById("homeadd").value,
            zipcode : document.getElementById("zipcode").value,
            province : document.getElementById("province").value,
            country : document.getElementById("country").value,
            phonenumber : document.getElementById("phone_number").value,
            email : document.getElementById("email").value,
            usertype : document.querySelector("#usertype").value,
            gender : document.querySelector('input[name="gender"]:checked').value

        }
        $.ajax({
            type : 'post',
            url : 'config/_register.php',
            data : datas,
            success : function (result){
                console.log(result)
                $("#resmessage").text(result);
            }
        });
    });
</script>