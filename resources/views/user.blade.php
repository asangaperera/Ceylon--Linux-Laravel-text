<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
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
@if(Session::has('delete_user'))
<span>{{Session::get('user_update')}}</span>
@endif
    <a style="float:left" href="{{route('add.user')}}">Add User </a><br>
<table>
    <tr>
        <th>User ID</th>
        <th>Name </th>
        <th>NIC</th> 
        <th>Address</th> 
        <th>Mobile</th> 
        <th>Email</th>
        <th>Gender</th> 
        <th>Territory</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>

</tr>  
       @foreach($users as $user)
       <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->nic }}</td>
           <td>{{$user->address }}</td>
           <td>{{$user->mobile }}</td>
           <td>{{$user->email }}</td>
           <td>{{$user-> gender}}</td>
           <td>{{$user->terr }}</td>
           <td>{{$user->userName }}</td>
           <td>{{$user->password }}</td>
           <td>
               <a href="/edit-user/{{$user->id}}">Edit</a>
              
           </td> 
           <td>
           <a href="/delete-user/{{$user->id}}">Delete</a>
    </td>
</tr>
  @endforeach
</table>
</body>
</html>