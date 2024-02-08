<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSERS</title>
    <link rel="stylesheet" href="/CSS/Courses.css">
</head>

<body>

<div class="first-container">
    <h2>LIST OF  COURSES OFFERED </h2>
    <table>
        <thead>
            <tr>
                <th>COURSE NAME</th>
                <th>CREDIT LOAD</th>
                <th>COURSE CODE</th>
                <th>LEVEL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
     @foreach ($courses as $course)
    <td>{{$course->name}}</td> 
    <td>{{$course->credit}}</td> 
    <td>{{$course->code}}</td>
    <td>{{$course->level}}</td>
        
            </tr>
            @endforeach
        </tbody>
    </table>   
</div>

</body>

</html>