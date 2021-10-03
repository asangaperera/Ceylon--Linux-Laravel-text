<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKU List</title>
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
@if(Session::has('delete_sku'))
<span>{{Session::get('sku_update')}}</span>
@endif
    <a style="float:left" href="{{route('add.sku')}}">Add SKU </a><br>
<table>
    <tr>
        <th>SKU ID</th>
        <th>SKU Code</th>
        <th>SKU Name</th>
        <th>MRP</th> 
        <th>Distributor Price</th>
        <th>Weight/Volume</th>
        <th>Kg/g</th>
        <th>Edit</th> 
        <th>Delete</th> 
</tr>  
       @foreach($skus as $sku)
       <tr>
           <td>{{$sku->s_id}}</td>
           <td>{{$sku->sku_name}}</td>
           <td>{{$sku->mrp}}</td>
           <td>{{$sku->dis_price}}</td>
           <td>{{$sku->weight}}</td>
           <td>{{$sku->w_type}}</td>
           <td>
               <a href="/edit-sku/{{$sku->s_id}}">Edit</a>
              
           </td> 
           <td>
           <a href="/delete-sku/{{$sku->s_id}}">Delete</a>
    </td>
</tr>
  @endforeach
</table>
</body>
</html>