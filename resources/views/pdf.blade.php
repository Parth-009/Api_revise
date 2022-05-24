<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <h2 class="text-center">Student Data</h2>
    <table class="table table-border mt-2" border="1">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Gender</th>
            </tr>
        </thead>
        @for ($i=0;$i<count($value);$i++)
        <tbody>
            <tr>
                <td>{{$value[$i]->id}}</td>
                <td>{{$value[$i]->FName}}</td>
                <td>{{$value[$i]->Address}}</td>
                <td>{{$value[$i]->Phone}}</td>
                <td>{{$value[$i]->Gender}}</td>
            </tr>
        </tbody>
        @endfor
    </table>
    </div>
</body>
</html>