<!DOCTYPE html>
<html>
<head>
    <title>GameCritic</title>
</head>
<body>

<h1>This is a Heading</h1>

Id : {{$id}}
<br>
Number : {{$number}}
<br>
Sum : {{$id + $number}}

<form action="/save" method="post">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <input type="submit" value="save">
</form>

</body>
</html>
