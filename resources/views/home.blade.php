<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Welcome</h3>
@if(session('status'))
    {{session('status')}}
@endif
<br>
    <a href="{{url('setSingle')}}">
        <button>Set Single Session</button>
    </a>
    <a href="{{url('getSingle')}}">
        <button>Get Single Session</button>
    </a>
    <a href="{{url('setMultiple')}}">
        <button>Set Multiple Session</button>
    </a>
    <a href="{{url('deleteSession')}}">
        <button>Delete All Session</button>
    </a>
</body>
</html>