<div style="height: 2em"></div>

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700,900');
body{
	
	font-family: 'Raleway', sans-serif;
}

h1{
	font-family: 'Raleway', sans-serif;
	font-weight:900;
	
}

h1,h2,h3,h4,h5,h6 {font-family: 'Raleway', sans-serif;}

dl.sub-nav {

margin-left:0px;
}
</style>
<div id="footer">

	<div class="row">
		<div class="four column">
			<h6>Copyright 2017 kadibu technologies</h6>
		</div>
		
		<div class="five column centered">
			<div style="height: 1em"></div>			
      <?php if(isset($_SESSION['username'])) { ?>
        <a href="rulesPage.php">Home</a> <span style="margin: 1em">/</span>
        <a href="logout.php">Logout</a>
      <?php } else { ?>
        <a href="index.php">Home</a> <span style="margin: 1em">/</span>
        <a href="frontpage_about.php">About Us</a> <span style="margin: 1em">/</span>
  			<a href="index.php">Login</a> <span style="margin: 1em">/</span>
  			<a href="frontpage_signup.php">Sign Up</a>
      <?php } ?>
		</div>
	</div>

</div>

<div id="notificationsContent" class="reveal-modal [expand, xlarge, large, medium, small]">
<?php include('notifications.php'); ?>
</div>

  <!-- Latest version of jQuery -->
  <script src="javascripts/jquery.js"></script>
  <!-- <script src="javascripts/questionsjs.js"></script> -->
  <script>
  <?php include("questionsjs.php"); ?>
  </script>

  <script src="javascripts/subnavigation.js"></script>
  <!-- Included JS Files (Unminified) -->
  <!-- [JS Files] -->
  <script type='text/javascript'>
   $(window).load(function() {
       $('#featuredContent').orbit({ fluid: '16x6' });
   });
   
   $(document).ready(function() {

    $("#notifications").click(function() {
      $("#notificationsContent").reveal();
    });
    
    $("#signupbutton").click(function(event) {
      var name = $("#name").val();
      var username = $("#username").val();
      var password = $("#password").val();
      var cpassword = $("#cpassword").val();
      var mobileno = $("#mobileno").val();
      var tagline = $("#tagline").val();
      var college = $("#college").val();

      $.post('register.php', {"name":name , "username":username, "password":password,"cpassword":cpassword ,"mobileno":mobileno ,"tagline":tagline ,"college":college ,}, function(data) {
          $("#signupMessage").html(data);
          if(data=="You have successfully registered!") {
            $("#signupMessage").removeClass("alert");
            $("#signupMessage").addClass("success");
            setInterval(1000);
            location.href="rulesPage.php";
          } else {
            $("#signupMessage").removeClass("success");
            $("#signupMessage").addClass("alert");
          }
      });
    });

    $("#editbutton").click(function(event) {
      var name = $("#name").val();
      var mobileno = $("#mobileno").val();
      var tagline = $("#tagline").val();
      var college = $("#college").val();

      $.post('edit.php', {"name":name ,"mobileno":mobileno ,"tagline":tagline ,"college":college ,}, function(data) {
          $("#editMessage").html(data);
          if(data=="Edited Successfully!") {
            $("#editMessage").removeClass("alert");
            $("#editMessage").addClass("success");
          } else {
            $("#editMessage").removeClass("success");
            $("#editMessage").addClass("alert");
          }
      });
    });

    $("#answerbutton").click(function() {
      var useranswer = $("#answertext").val();
      var questionpath = $("#questionPic").attr('src');
      $.post('checkanswer.php', {'questionpath': questionpath, 'useranswer': useranswer}, function(data) {
        if(data==="true") {
          $("#answercorrectlabel").html("Correct Answer. Solve Next Question");
          $("#answercorrectlabel").removeClass("alert");
          $("#answercorrectlabel").addClass("label");
          $("#answercorrectlabel").addClass("success");
        } else {
          $("#answercorrectlabel").removeClass("success");
          //$("#answercorrectlabel").html("Wrong Answer Donkey!");
          $("#answercorrectlabel").html(data);
          $("#answercorrectlabel").addClass("label");
          $("#answercorrectlabel").addClass("alert");
        }
        $('#answertext').val('');
        $('#getHint').val('');
      });
    });

    $("#linkHint").click(function() {
      var questionpath = $("#questionPic").attr('src');
      //alert(questionpath);
      $.post('checkHint.php', {'questionpath': questionpath}, function(data) {
        $("#getHint").val(data);
      });
    });

    $('#photoimg').live('change', function()  
    { 
      $("#preview").html('');
      $("#preview").html('<img src="images/loader.gif" alt="Uploading...."/>');
      $("#imageform").ajaxForm(
      {
        target: '#preview'
      }).submit();
    });

    
  });

</script>

  <!-- We include all the unminified JS as well. Uncomment to use them instead -->

  <!-- Included JS Files (Minified) -->
  <script src="javascripts/foundation.min.js"></script>

  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  
</body>
</html>