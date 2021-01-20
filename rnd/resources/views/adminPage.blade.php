@extends('layouts.header')

@section('content')

    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <b>Random Users</b> <a href="#" class="btn btn-success"
                                                   data-bs-toggle="modal" data-bs-target="#UsersModal">+Add</a>
                        </div>
                        <div class="card-body">
                            <table id="userTable" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr id="uid{{$user->id}}">
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td><a href="javascript:void(0)" onclick="deleteUser({{$user->id}})" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add user Modal -->
    <div class="modal fade" id="UsersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#userForm").submit(function(e){
            e.preventDefault();

            let name = $("#name").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{route('useradd')}}",
                type:"POST",
                data:{
                    name:name,
                    email:email,
                    password:password,
                    _token:_token
                },
                success:function(response)
                {
                    if(response)
                    {
                        $("#userTable tbody").prepend('<tr><td>'+ response.name +'</td><td>'+ response.email +'</td><td>'+ response.password +'</td></tr>');
                        $("#userForm")[0].reset();
                        $("#UsersModal").modal('hide');
                    }
                }
            });
        });
    </script>

    <script>
        function deleteUser(id)
        {
            if(confirm("Do you really want to delete this user?"))
            {
                $.ajax({
                    url:"/remove/"+id,
                    type:"DELETE",
                    data: {
                        _token : $("input[name=_token]").val()
                    },
                   success:function(response)
                   {
                        $("#uid"+id).remove();
                   }
                });
            }
        }
    </script>

@endsection
