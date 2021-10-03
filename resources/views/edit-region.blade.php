<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Region</title>
</head>
<body>
@if(Session::has('region_update'))
<span>{{Session::get('region_update')}}</span>
@endif
<div class="form-group row">
            <form method="post" action="{{route('update.region')}}"><h2>EDIT ZONE </h2>
        @csrf
        <input type="hidden" name="r_id" value="{{$region->r_id}}">
        Zone:<input type="text" name="zone" value="{{$region->zone}}"><br>
        Region Name:<input type="text" name="r_name" value="{{$region->r_name}}"><br>
        <input type="submit" value="Edit"></form></div>
</body>
</html>