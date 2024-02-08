<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="/CSS/reg.css">

</head>
<body>
<div id="form-hold">
    <h3 class='text1'>let's get Started</h3>
    <p class='text2'>create your new account</p>
<form action="{{ route('signup')}}" method="POST">
    @csrf
    <input type="text" name="firstname" placeholder="FIRST NAME" id="fname">
    <br>
    <input type="text" name="lastname" placeholder="LAST NAME" id="lname">
    <br>
    <input type="text" name="phone" id="phone" placeholder="PHONE NUMBER">
    <br>
    <input type="date" name="dob" id="DOB" placeholder="DOB">
    <br>
    <input type="email" name='email'  id='email' placeholder="Email">
    <br>
    <input type="password" name='password'  id='pass' placeholder="Password">
    <br>
    <input type="password" name="confirm" id="confirm" placeholder="confirm password">
    <br>

    <button type="submit">submit</button>
</form>

</div>    
</body>
</html>