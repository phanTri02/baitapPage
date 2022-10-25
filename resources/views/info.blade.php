<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-uppercase text-color:blue">information</h1>
    <div class="text-center">
        <h1>
            Vua fix bug
        </h1>
        <p>Student</p>
        {{-- <p>{{$student['name']}}</p>
        <p>{{$student['age']}}</p>
        <p>{{$student['class']}}</p>
        <p><a href="/so1">Go to welcome page</a></p> --}}
        <?php
        foreach ($student as $key) {
            foreach ($key as $k => $v) {
                echo '<p>' . $k.':' . $v.'</p>';
            }
        }
        ?>

        <p><a href="/welcome">Go to welcome page</a></p>
    </div>
</body>
</html>