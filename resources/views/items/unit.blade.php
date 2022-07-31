@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="unitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('updateunit')}}" method="">
                    @csrf

                    <input hidden type="text"  class="form-control" name="unittId" id="UnitId">
                    <div class="row mb-12">
                        <label for="UnitName" class="col-sm-2 col-form-label">Unit Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="name" class="form-control" name="unittName" id="UnitName">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Unit</button>
                </form>
            </div>

        </div>
    </div>
</div>
<main class="mt-5 pt-3">
    <div class="container-fluid">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="AllUnitList-tab" data-bs-toggle="tab" data-bs-target="#AllUnitList" type="button" role="tab" aria-controls="AllUnitList" aria-selected="true">All Unit List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="UnitDefination-tab" data-bs-toggle="tab" data-bs-target="#UnitDefination" type="button" role="tab" aria-controls="UnitDefination" aria-selected="false">Unit Defination</button>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllUnitList" role="tabpanel" aria-labelledby="AllItemsList-tab">
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
                                                <th>Unit ID</th>
                                                <th>Unit N ame</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($unitdata as $pmm)
                                            <tr>
                                                <td>{{$pmm->id}}</td>
                                                <td>{{$pmm->unit_name}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-name="{{$pmm->unit_name}}" data-toggle="modal" data-target="#unitModal">Edit</a></td>
                                                <td><a href="deleteunit/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>
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
            <div class="tab-pane fade" id="UnitDefination" role="tabpanel" aria-labelledby="UnitDefination-tab">
                <div class="container-fluid">


                    <form action="{{url('insertunit')}}" method="">
                        @csrf
                        <div class="row mb-12">
                            <label for="UnitName" class="col-sm-2 col-form-label">Unit Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="UnitName" id="UnitName">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Unit</button>
                    </form>


                </div>
            </div>

        </div>


    </div>
</main>

@stop