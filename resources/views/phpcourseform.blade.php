<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COURSE FORM</title>
</head>
<body>
    <form action="{{route('Createcourse')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Course Name">
        <input type="number" name="credit" placeholder="Credit unit">
        <input type="text" name="code" placeholder="course code">
        <input type="text" name="level" placeholder="course level">
        <button>SUBMIT</button>
    </form>
</body>
</html>
