
// $(window).on('load',function (){
//     menuLoader();
//   });
  
   function menuLoader(){
    $("#mainmenu-area").load("components/navbar.php");
    $("#contents").load("components/home.php");
}

  function selectedUrl(data){
    $("#contents").load("components/"+data+".php");
  } 
function loginform(data) {
    alert('login form')
    if (data == '2') {
        console.log('user not exist in the session storage')
        $("#contents").load("components/log_in.php");
    } else {
        console.log('lofin user')
        $("#contents").load("components/user_profile.php");
    }
  }
  function logoutform(){
    $.ajax({
        
    });
  }
  function loadFeatured(){
    $("#featured_images").load("components/featured_image.php");
  }

  function checkInput(data){
    let inputVal = document.getElementById(data).value;
    if (inputVal == ' ' || inputVal == null) {
        return 0;
    } else {
        return 1;
    }
  }