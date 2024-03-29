<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    <div class="container" style="border-style: solid;border-color: red;">
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>FName</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Gender</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

</div>
</body>
<script type="text/javascript">

  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'FName', name: 'FName'},
            {data: 'Address', name: 'Address'},
            {data: 'Phone', name: 'Phone'},
            {data: 'Gender', name: 'gender'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });

</script>
</html>