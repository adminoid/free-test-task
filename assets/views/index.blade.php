<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<div class="container">

    <h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-md6">
            <button type="button" class="btn btn-primary">Create task</button>
        </div>

        <div class="col-md-6">

            <button type="button" class="btn btn-secondary">Administrate tasks (going to login form)</button>
        </div>

    </div>

    <div class="row">
        <article>
            <p>
                {{ $content }}
            </p>
        </article>
    </div>

</div>



</body>
</html>
