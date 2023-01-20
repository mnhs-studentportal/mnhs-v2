<?php
include "../config/sessions.php";

?>
<div class="container">
            <div class="row  align-items-center">
                <div class="col-md-12 col-lg-7 text-center text-lg-left">
                    <div class="main-banner">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 font-weight-normal">
                            LOG IN NOW!
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

   
                    </div>
                </div>

                <div class="col-md-12 col-lg-5 card card-2 bg-primary">
                    <div class="card-body">
                        <br>
                    <h3>Login here!</h3>
                    <br>
                    <div>
                    <p class="text-danger" id="resmessages"></p>
                    </div>
                    <form action="#" class="" id="authForm">
                            <div class="form-group">
                            <label for="uname">Username:</label>
                            <input type="text" class="form-control form-inputs" id="uname" placeholder="Enter username" name="uname" required >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control form-inputs" id="pwd" placeholder="Enter password" name="pswd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-lg btn-info btn-block" onclick="login()" id="login_">Login</button>
                        </form>
                    </div>
                
                </div>
            </div> <!-- / .row -->
        </div> 
<script>
      
           $("#login_").on('click',function(){
    
            let user = document.getElementById('uname').value;
        let pass = document.getElementById('pwd').value;
        
        $.ajax({
            method : 'post',
            url : 'config/_auth.php',
            data : {"user" : user, "pass": pass},
            success : function (res){
                $('#resmessages').html(res);
                //loginform(<?php echo $_SESSION['id']?>);
              
                window.location.reload();
            }
        });
        //     var authForm = document.getElementById("authForm");
    // //Extract Each Element Value
    // for (var i = 0; i < authForm.elements.length; i++) {
    
    // var authData = authForm.elements[i].value;
    //console.log(pass);
    //}
    });
</script>