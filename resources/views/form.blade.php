<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Input" name="index">
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-3">Calculate</button>
        </div>
    </form>
</body>
</html>