<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>HEllO <?php echo $name ?></h1>
    <ul>
    @foreach($tasks as $task)
    <li>{{$task['_id']}}</li>
    @endforeach
    </ul>
    
    
</body>
</html>