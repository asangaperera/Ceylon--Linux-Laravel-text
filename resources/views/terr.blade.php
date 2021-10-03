<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Territory List</title>
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
@if(Session::has('delete_terr'))
<span>{{Session::get('terr_update')}}</span>
@endif
    <a style="float:left" href="{{route('add.terr')}}">Add Territory </a><br>
<table>
    <tr>
        <th> ID</th>
        <th>Zone </th>
        <th>Region </th>
        <th>Territory Name </th>
        <th>Edit</th> 
        <th>Delete</th> 
</tr>  
       @foreach($terrs as $terr)
       <tr>
           <td>{{$terr->t_id}}</td>
           <td>{{$terr->zone}}</td>
           <td>{{$terr->regi}}</td>
           <td>{{$terr->t_name}}</td>
           <td>
               <a href="/edit-terr/{{$terr->t_id}}">Edit</a>
              
           </td> 
           <td>
           <a href="/delete-terr/{{$terr->t_id}}">Delete</a>
    </td>
</tr>
  @endforeach
</table>
</body>
</html>