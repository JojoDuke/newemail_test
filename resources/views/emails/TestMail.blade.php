<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Mail</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <h4>{{ $details['body'] }}</h4>
    <h4>{{ $details['iso'] }} EN is the language iso code</h4>
    <h4>To user {{ $details['user_id'] }} <br/>at {{ $details['email'] }}</h4>
    <h4>Status Code is {{ $details['status'] }}</h4>
    <p>The app name is {{ config('app.name') }}</p>
</body>
</html>

