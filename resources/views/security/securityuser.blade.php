@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="row g-3" action="{{url('updateuser')}}" method="">
                        @csrf
                        <input hidden type="text"  class="form-control" name="userId" id="userId">                        
                        <div class="col-md-6">
                            <label for="userName" class="form-label">user Name</label>
                            <input type="text" class="form-control" name="userName" id="userName">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" name="password" id="password">
                        </div>
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full name</label>
                            <input type="text" class="form-control" name="fullName" id="fullName">
                        </div>
                        <div class="col-4">
                            <label for="Contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="Contact" id="Contact">
                        </div>
                        <div class="col-4">
                            <label for="Designation" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="Designation" id="Designation">
                        </div>
                        <div class="col-md-6">
                            <label for="accountType" class="form-label">Account type</label>
                            <input type="text" class="form-control" name="accountType" id="accountType">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add user</button>
                        </div>
                    </form>
            </div>

        </div>
    </div>
</div>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="AllUserList-tab" data-bs-toggle="tab" data-bs-target="#AllUserList" type="button" role="tab" aria-controls=">AllUserList" aria-selected="true">All User List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="UserDefination-tab" data-bs-toggle="tab" data-bs-target="#UserDefination" type="button" role="tab" aria-controls="UserDefination" aria-selected="false">User Defination</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllUserList" role="tabpanel" aria-labelledby="AllUserList-tab">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <span><i class="bi bi-table me-2"></i></span> Data Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped data-table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>UserName</th>
                                                <th>Full Name</th>
                                                <th>Contact</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $pmm)
                                            <tr>
                                                <td>{{$pmm->username}}</td>
                                                <td>{{$pmm->fullname}}</td>
                                                <td>{{$pmm->contact}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-username="{{$pmm->username}}" data-name="{{$pmm->fullname}}" data-contact="{{$pmm->contact}}" data-password="{{$pmm->password}}" data-designation="{{$pmm->designation}}" data-accounttype="{{$pmm->account_type}}" data-toggle="modal" data-target="#userModal">Edit</a></td>
                                                <td><a href="deleteuser/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>UserName</th>
                                                <th>Full Name</th>
                                                <th>Contact</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="UserDefination" role="tabpanel" aria-labelledby="UserDefination-tab">
                <div class="container-fluid">
                    <form class="row g-3" action="{{url('insertuser')}}" method="">
                        @csrf                        
                        <div class="col-md-6">
                            <label for="userName" class="form-label">user Name</label>
                            <input type="text" class="form-control" name="userName" id="userName">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" name="password" id="password">
                        </div>
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full name</label>
                            <input type="text" class="form-control" name="fullName" id="fullName">
                        </div>
                        <div class="col-4">
                            <label for="Contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="Contact" id="Contact">
                        </div>
                        <div class="col-4">
                            <label for="Designation" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="Designation" id="Designation">
                        </div>
                        <div class="col-md-6">
                            <label for="accountType" class="form-label">Account type</label>
                            <input type="text" class="form-control" name="accountType" id="accountType">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add user</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
@stop