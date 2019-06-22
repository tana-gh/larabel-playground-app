<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foo</title>
</head>
<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <p>{{ $hello }}</p>
    <form action="/foo" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
