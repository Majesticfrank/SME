<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/CSS/reg.css">

</head>
<body>
    <div id="login">
        <h3 class='text1'>Welcome back</h3>
        <p class='text2'>Login to your Account</p>
    <form action="{{route('log')}}"  method="POST" id=login-form>
        @csrf
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit" id='btn-login'>login</button >
    </form>
</div>
</body>
</html>
