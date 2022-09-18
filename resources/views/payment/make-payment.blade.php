<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach

    <div style="padding-left: 30%; padding-top:10%">
        <form action="{{ route('makePayment') }}" method="POST">
            @csrf
            <label for="">Name</label> <br>
            <input type="text" name="name">

            <br><br>
            <label for="">Email</label><br>
            <input type="email" name="email"> <br><br>

            <label for="">Account no</label><br>
            <input type="text" name="account_no">
            <br> <br>
            <button type="submit">Make Payment</button>

        </form>
        </div>
</body>
</html>
