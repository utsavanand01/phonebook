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
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand">PHONE BOOK</a>
        </div>
    </nav>
   <div class="container mt-2">
       <div class="row">
           <div class="col-3">
               @if(session("msg"))
               <div class="alert alert-success">
                   {{session("msg")}}
               </div>
               @endif
               <div class="card">
                   <div class="card-body">
                       <form action="<?= route('store');?>" method="post">
                       @csrf
                           <div class="mb-2">
                               <label for="">Name</label>
                               <input type="text" name="name" class="form-control" value="{{old('name')}}">
                               @error("name")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">contact</label>
                               <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                               @error("contact")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                            </div>
                            <div class="mb-2">
                               <label for="">email</label>
                               <input type="text" name="email" class="form-control"value="{{old('email')}}">
                               @error("email")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">city</label>
                               <input type="text" name="city" class="form-control"value="{{old('city')}}">
                               @error("city")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <input type="submit" class="btn btn-dark w-100">
                           </div>
                       </form>
                   </div>
               </div>
           </div>
           <div class="col-9">
           @if(session("error"))
               <div class="alert alert-danger">
                   {{session("error")}}
               </div>
               @endif
               <table class="table table-bordered">
                   <tr>
                       <th>id</th>
                       <th>name</th>
                       <th>contact</th>
                       <th>email</th>
                       <th>city</th>
                       <th>action</th>
                      
                   </tr>
                   @foreach($contacts as $a)
                   <tr>
                       <td>{{$a->id}}</td>
                       <td>{{$a->name}}</td>
                       <td>{{$a->contact}}</td>
                       <td>{{$a->email}}</td>
                       <td>{{$a->city}}</td>
                       <td>
                           <a href="{{route('remove',['cont_id'=> $a->id])}}" class="btn btn-danger btn-sm">delete</a>
                           <a href="{{route('view',['sno'=> $a->id])}}" class="btn btn-success btn-sm">view</a>
                       </td>
                   </tr>
                   @endforeach
               </table>
           </div>
       </div>
   </div> 
</body>
</html>