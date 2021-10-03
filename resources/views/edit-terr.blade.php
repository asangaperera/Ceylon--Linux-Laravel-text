<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit TERRITORY</title>
</head>
<body>
@if(Session::has('terr_update'))
<span>{{Session::get('terr_update')}}</span>
@endif
<div class="form-group row">
            <form method="post" action="{{route('update.terr')}}"><h2>EDIT ZONE </h2>
        @csrf
        <input type="hidden" name="t_id" value="{{$terr->t_id}}">
        Zone:<input type="text" name="zone" value="{{$terr->zone}}"><br>
        Region :<input type="text" name="regi" value="{{$terr->regi}}"><br>
        Territory Name:<input type="text" name="t_name" value="{{$terr->t_name}}"><br>
        <input type="submit" value="Edit"></form></div>
</body>
</html>