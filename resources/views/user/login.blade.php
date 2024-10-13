<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: #f1f7ed; padding:2%">
    <h1>Login page</h1>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

        <form action="{{route("user.signIn")}}" method="post">
            @csrf 
            <p>email</p>
            <input type="email", name="email"> <br>
            <p>password</p>
            <input type="password", name="password"> <br>
            <button type="submit">sign in</button>
        </form>
    </div>
</body>
</html>
