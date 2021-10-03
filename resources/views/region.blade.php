<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region List</title>
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
@if(Session::has('delete_region'))
<span>{{Session::get('region_update')}}</span>
@endif
    <a style="float:left" href="{{route('add.region')}}">Add Region </a><br>
<table>
    <tr>
        <th>Region ID</th>
        <th>Zone </th>
        <th>Region Name</th> 
        <th>Edit</th> 
        <th>Delete</th> 
</tr>  
       @foreach($regions as $region)
       <tr>
           <td>{{$region->r_id}}</td>
           <td>{{$region->zone}}</td>
           <td>{{$region->r_name}}</td>
           <td>
               <a href="/edit-region/{{$region->r_id}}">Edit</a>
              
           </td> 
           <td>
           <a href="/delete-region/{{$region->r_id}}">Delete</a>
    </td>
</tr>
  @endforeach
</table>
</body>
</html>