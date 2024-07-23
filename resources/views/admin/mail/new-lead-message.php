@dd($lead);

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>You received a new message from: {{$lead['name']}}</h1>
    <p>{{$lead['email']}}</p>
    <p>{{$lead['message']}}</p>


</body>

</html>