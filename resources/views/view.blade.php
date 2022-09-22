<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                <table class="table">
                <tr>
                    <th colspan="4">Contact details</th>
                </tr>
                <tr>
                    <th colspan="2">Name</th>
                    <th>{{$contact->name}}</th>
                </tr>
                <tr>
                    <th colspan="2">Contact</th>
                    <th>{{$contact->contact}}</th>
                </tr>
                <tr>
                    <th colspan="2">Email</th>
                    <th>{{$contact->email}}</th>
                </tr>
                <tr>
                    <th colspan="2">City</th>
                    <th>{{$contact->city}}</th>
                </tr>
            </table>
                </div>
            </div>   
        </div>
    </div>

</div>
</body>
</html>