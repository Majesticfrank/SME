<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT COURSE</title>
</head>

<body>
    <h1>Edit Courses</h1>
    <form action="{{route('Edit_course', $course->id)}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="Course Name" value="{{old('name',$course->name)}}">
        <input type="number" name="credit" placeholder="Credit unit" value="{{old('credit',$course->credit)}}">
        <input type="text" name="code" placeholder="course code" value="{{old('code',$course->code)}}">
        <input type="text" name="level" placeholder="course level" value="{{old('level',$course->level)}}">
        <button type='submit'>SUBMIT</button>
    </form>


</body>

</html>