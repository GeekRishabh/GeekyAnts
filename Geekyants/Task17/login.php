<!DOCTYPE html>
<html>
<head>

    <title>Login Page</title>

</head>
<body>

<!-- Form Code Start -->

<form id='login' action="guard.php" method='post'>



<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='email' name='email' id='email'  maxlength="50" /><br/>

</div>

<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>

</div>

<div class='container'>
    <input type='submit' name="submit" id="submit" value="submit" />
</div>


</form>



</body>
</html>
