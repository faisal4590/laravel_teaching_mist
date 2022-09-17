<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <div style="padding-left: 30%; padding-right: 30%">
        <h1>Post ID: </h1> {{ $post->id }} <br>
        <h3>Post title: </h3> {{ $post->title }} <br>
        <p>Post body: </p> {{ $post->body }}
    </div>

</body>
</html>
