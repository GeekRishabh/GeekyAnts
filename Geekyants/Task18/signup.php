<?php

?>
<!DOCTYPE html>
<html>
<head>

    <title>Sign Up</title>
  <script type="text/javascript">
    function check_pass(){
    if (document.getElementById('password').value==document.getElementById('password1').value){
 document.getElementById("submit").disabled = false;
 console.log("SAME");
}
else {
 document.getElementById("submit").disabled = true;
 console.log("not same");
}
    }
    </script>
</head>
<body>

<!-- Form Code Start -->

<form id='register' action="sign-up-post.php" method='post'>

    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name'  maxlength="50" /><br/>

<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='email' name='email' id='email'  maxlength="50" /><br/>

</div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' maxlength="50" /><br/>

</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" onChange="check_pass()"/><br/>
    <label for='password1' >Confirm Password*:</label><br/>
    <input type='password' name='password1' id='password1' maxlength="50" onChange="check_pass()" />
</div>

<div class='container'>
    <input type='submit' name="submit" id="submit" value="submit" />
</div>


</form>



</body>
</html>
