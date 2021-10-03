<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite Zone</title>
</head>
<body>
@if(Session::has('zone_update'))
<span>{{Session::get('zone_update')}}</span>
@endif
<div class="form-group row">
            <form method="post" action="{{route('update.zone')}}"><h2>EDIT ZONE </h2>
        @csrf
        <input type="hidden" name="zone_id" value="{{$zone->zone_id}}">
        Zone long Descripion:<input type="text" name="zone_lg_des" value="{{$zone->zone_lg_des}}"><br>
        Short Descripion:<input type="text" name="sh_des" value="{{$zone->sh_des}}"><br>
        <input type="submit" value="Edit"></form></div>
</body>
</html>