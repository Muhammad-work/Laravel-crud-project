<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        width:80%;
        height: 1000vh;
      display: block;
      margin: auto;
      font-family: sans-serif;
    }
    table,tr,th,td{
        padding: 20px;
        border: 1px solid black;
    }
    table{
        width:100%;
        border-collapse: collapse;
    }
    h1{
        text-align: center;
        margin: 20px 0px
    }
    .container > a{
        float: right;
        background: lightblue;
        padding: 10px 20px;
        margin-bottom:10px;
        border-radius: 5px;
        color:black;
        text-decoration: none;
    }
    table tr td a{
  /* background: lightblue; */
        padding: 10px 20px;
        margin-bottom:10px;
        border-radius: 5px;
        color:black;
        text-decoration: none;
        color:white;
        cursor: pointer;
    }
    table tr td .view{
        background: blue;
    }
    table tr td .update{
        background: yellow;
    }
    table tr td .delete{
        background: red;
    }
</style>
<body>

    <div class="container">
        <h1>Student Details</h1>
        <a href="{{ route('add.page') }}">Add Student</a>
        <table>
            <tr>
                <th>S.NO</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>AGE</th>
                <th>CITY</th>
                <th>VIEW</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
            @foreach ($data as $id => $value)
            <tr>
                <td> {{$value->id}} </td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->city}}</td>
                <td><a href="{{ route('singleUser.page',$value->id) }}" class="view">View</a></td>
                <td><a href="{{ route('update.page',$value->id) }}" class="update">Update</a></td>
                <td><a href="{{ route('delete',$value->id) }}" class="delete">Delete</a></td>
            </tr>
            @endforeach
        </table>
        <div>
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
    
</body>
</html>