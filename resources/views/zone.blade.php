<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zone List</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%
        }
        td,th{
            padding: 5px;
            border: 2px solid;
        }
        </style>
</head>
<body>
@if(Session::has('delete_zone'))
<span>{{Session::get('zone_update')}}</span>
@endif
    <a style="float:left" href="{{route('add.zone')}}">Add Zone </a><br>
<table>
    <tr>
        <th>Zone Code</th>
        <th>Zone Long Description</th>
        <th>Zone Short Description</th> 
        <th>Edit</th> 
        <th>Delete</th> 
</tr>  
       @foreach($zones as $zone)
       <tr>
           <td>{{$zone->zone_id}}</td>
           <td>{{$zone->zone_lg_des}}</td>
           <td>{{$zone->sh_des}}</td>
           <td>
               <a href="/edit-zone/{{$zone->zone_id}}">Edit</a>
              
           </td> 
           <td>
           <a href="/delete-zone/{{$zone->zone_id}}">Delete</a>
    </td>
</tr>
  @endforeach
</table>
</body>
</html>