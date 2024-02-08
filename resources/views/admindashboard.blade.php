<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN_DASHBOARD</title>
    <link rel="stylesheet" href="/CSS/adminD.css">
    <script src="https://kit.fontawesome.com/45663121b4.js" crossorigin="anonymous"></script>
</head>

<body>
    <h2> DASHBOARD</h2>
    <div id="navlink-container">

        <ul>
            <li><a href="#">HOME</a< /li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="#" onclick="change()">COURSES OFFERED<i class="fa-solid fa-arrow-right"></i></a></li>
            <li><a href="#">APLLICATIONS</a></li>
            <li><a href="#">PAYMENTS</a></li>

        </ul>
    </div>

    <div id="first-container">
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
                    <td>{{$course->level}}



                        <form action="{{route('destroy_course', $course->id)}}"method='POST'> 
                       
                            @csrf
                            @method("DELETE")
                            <button id='del' type='submit'>DELETE</button><br>
                        </form>


                        <form action="{{route('edit_courses_display', $course->id)}}" method='get'>
            <button id=' edit'>EDIT</button>
                    </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>











    <script src='/javascript/sms.js'></script>


</body>

</html>