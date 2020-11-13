<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All employees</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <table class='table'>
            <a href="/employee/add">Add new employee</a>
            <form action="/employee/save" method="post">
            @csrf
            <tr></tr>
                <td colspan = "2"><input type = "text" name= "name" class= "form-control" placeholder = "Name" /></td>
                <td><input type    = "text" name= "lastname" class = "form-control" placeholder = "Lastname" /></td>
                <td><input type    = "date" name= "birthdate" class= "form-control" placeholder = "Birthdate" /></td>
                <td><input type    = "number" name= "personal_id" class= "form-control" placeholder = "Personal id" /></td>
                <td><input type    = "number" name= "salary" class= "form-control" placeholder = "Salary" /></td>
                <td></td>
                <td></td>
                <td><button class = "btn btn-success">Add</button></td>
            </tr>
        </form>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Birthdate</th>
                <th>Personal id</th>
                <th>Salary</th>
                <th>Created at</th>
                <th>Updated at</th>
            </thead>
            @foreach($employees as $emp)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->lastname}}</td>
                <td>{{$emp->birthdate}}</td>
                <td>{{$emp->personal_id}}</td>
                <td>{{$emp->salary}}</td>
                <td>{{$emp->created_at}}</td>
                <td>{{$emp->updated_at}}</td>
                <form action="/employee/delete" method="post">
                    @csrf
                    <input type="hidden" name="employee_id" value="{{ $emp->id }}">
                    <td><button class="btn btn-danger">Delete</button></td>
                </form>
                <td><a href = "{{ route('employee.edit',['id'=>$emp->id])}}">Edit</a></td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>
