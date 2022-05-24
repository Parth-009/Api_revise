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
    <div class="container mt-5">
        <h2 class="row justify-content-center"> Export the Data </h2>
        <div class="d-flex justify-content-center"> 
            <button type="button" class="btn btn-primary mr-2" onclick="window.location='{{ URL("/export/pdf") }}'">Export PDF</button>
            <button type="button" class="btn btn-primary mr-2" onclick="window.location='{{ URL("/export/csv") }}'">Export CSV</button>
            <button type="button" class="btn btn-primary mr-2" onclick="window.location='{{ URL("/export/view") }}'">View Data</button>
        </div>
    </div>
    @if(isset($data))
    <div class="container mt-5">
        <table class="table table-stripped" border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>phone</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->FName}}</td>
                    <td>{{$value->Address}}</td>
                    <td>{{$value->Phone}}</td>
                    <td>{{$value->Gender}}</td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>   
    @endif 
</body>
</html>