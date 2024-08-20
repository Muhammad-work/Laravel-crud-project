<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    .container{
        width:100%;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form{
        width:400px;
        height: 400px;
        border: 1px solid black;
        border-radius: 15px;
    }
    .input-contect{
        display: flex;
        flex-direction: column;
        /* background:yellow; */
        padding: 10px;
        gap: 10px
    }
    .input-contect input{
        padding: 10px;
        border: 1px solid rgba(0, 0, 0, 0.9);
        outline:none;
        border-radius: 5px;
    }
    .submit{
      display: block;
      margin: auto;
      margin-top:10px;
      width: 95%;
      padding:10px;
      cursor: pointer;
      border:none;
      outline:none;
      background:lightblue;
    }
</style>
<body>

    <div class="container">
        <form action="{{ route('update',$data->id)}}" method='post'>
            @csrf
            <div class="input-contect">
                <label for="">Name</label>
                <input type="text" name="name"  value="{{$data->name}}" id="" placeholder="Enter Name">
            </div>
            <div class="input-contect">
                <label for="">Email</label>
                <input type="text" name="email" id="" value="{{$data->email}}" placeholder="Enter Email">
            </div>
            <div class="input-contect">
                <label for="">Age</label>
                <input type="text" name="age" id=""  value="{{$data->age}}" placeholder="Enter Age">
            </div>
            <div class="input-contect">
                <label for="">City</label>
                <input type="text" name="city" id="" value="{{$data->city}}" placeholder="Enter City">
            </div>
            <input type="submit" name="" class="submit" value="submit">
        </form>
    </div>
    
</body>
</html>