<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tri's Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/ios7-inspired-mac-icon-set/512/Calculator_512.png" type="image/x-icon">
</head>
<body>
    <h1 class="text-uppercase">calculator</h1>
    <form method="post">
        @csrf
        <div class="form-group">
            <input type="number" class="form-control" placeholder="" name="soA">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="" name="soB">
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-3">Calculate</button>
        </div>
        <div class="form-group">
            <input type="number" class="form-contorl" placeholder="Answer" disabled="" value="<?php if(isset($sum)) echo $sum; ?>">
        </div>
    </form>
</body>
</html>