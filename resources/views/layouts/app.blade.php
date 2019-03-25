<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <title>Photoshow</title>
</head>
<body>
    <div class="container">
    @include('inc.topbar')
    @include('inc.messages')

<div class="row">
    @yield('content')
    </div>
    
    </div>
</body>
</html>