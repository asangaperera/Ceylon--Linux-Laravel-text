<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit SKU</title>
</head>
<body>
@if(Session::has('sku_update'))
<span>{{Session::get('sku_update')}}</span>
@endif
<div class="form-group row">
            <form method="post" action="{{route('update.sku')}}"><h2>EDIT SKU </h2>
        @csrf
        <input type="hidden" name="t_id" value="{{$sku->s_id}}">
        SKU Code :<input type="text" name="s_code" value="{{$sku->s_code}}"><br>
        SKU Name:<input type="text" name="sku_name" value="{{$sku->sku_name}}"><br>
        MRP :<input type="text" name="mrp" value="{{$sku->mrp}}"><br>
        Distributor Price :<input type="text" name="dis_price" value="{{$sku->dis_price}}"><br>
        Weight/Volume :<input type="text" name="weight" value="{{$sku->weight}}"><br>
        weight-type :<input type="text" name="w_type" value="{{$sku->w_type}}"><br>
        <input type="submit" value="Edit"></form></div>
</body>
</html>