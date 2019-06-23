@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Admin Dashboard</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">User Management</button>
                      <div id="myDropdown" class="dropdown-content">
                        <a href="role/index">Role</a>
                        <a href="user/index">User</a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button onclick="myFunctionn()" class="dropbtn">Blog Management</button>
                      <div id="myDropdownn" class="dropdown-content">
                        <a href="#">Category</a>
                        <a href="#">Post</a>
                      </div>
                    </div>
                    <hr>

                    <button class="btn-default"><a href="role/show">View all Role</a></button>
                    <button class="btn-default"><a href="create">Create new Role</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
