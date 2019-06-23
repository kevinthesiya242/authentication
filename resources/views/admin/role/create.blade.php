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

                    <button class="btn-default"><a href="#">View all Role</a></button>
                    <button class="btn-default"><a href="#">Create new Role</a></button>

                    <hr>
                     @if( Session::has('rc'))
                       <div class="alert alert-success">
                        <button class="close" data-dismiss="alert">*</button>
                        <strong>{{ session('rc') }}</strong> 
                       </div>
                       @endif
                       <hr>
                       @if( Session::has('roc'))
                       <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">*</button>
                        <strong>{{ session('roc') }}</strong>
                        <ul>
                          @foreach($errors->all() as $error)
                          <li>
                            {{ $error }}
                          </li>
                          @endforeach
                        </ul>
                      </div>
                       @endif
                       <hr>
                    <form method="post" action="{{ route('admin.role.store') }}">
                         @csrf
                         <label>Enter new Role</label>
                         <input type="text" name="name">
                         <br>
                         <input type="submit" name="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
