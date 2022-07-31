@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('updatecategory')}}" method="">
                    @csrf
                    <input hidden type="text" value="id" class="form-control" name="categoryId" id="categoryId">
                    <div class="row mb-12">
                        <label for="CategoryName" class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="CategoryName" id="CategoryName">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>

            </div>

        </div>
    </div>
</div>

<main class="mt-5 pt-3">
    <div class="container-fluid">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="AllCategoriesList-tab" data-bs-toggle="tab" data-bs-target="#AllCategoriesList" type="button" role="tab" aria-controls="AllCategoriesList" aria-selected="true">All Categories List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="CategoryDefination-tab" data-bs-toggle="tab" data-bs-target="#CategoryDefination" type="button" role="tab" aria-controls="CategoryDefination" aria-selected="false">Category Defination</button>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllCategoriesList" role="tabpanel" aria-labelledby="AllItemsList-tab">
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
                                                <th>Category ID</th>
                                                <th>Category Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $pmm)
                                            <tr>
                                                <td>{{$pmm->id}}</td>
                                                <td>{{$pmm->category_name}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-name="{{$pmm->category_name}}" data-toggle="modal" data-target="#categoryModal">Edit</a></td>
                                                <td><a href="deletecategory/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="CategoryDefination" role="tabpanel" aria-labelledby="CategoryDefination-tab">
                <div class="container-fluid">


                    <form action="{{url('insertcategory')}}" method="">
                        @csrf
                        <div class="row mb-12">
                            <label for="CategoryName" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="CategoryName" id="CategoryName">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>


                </div>
            </div>

        </div>



    </div>
</main>
@stop