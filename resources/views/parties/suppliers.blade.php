@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="suppliersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="row g-3" action="{{url('updatesupplier')}}" method="">
                        @csrf
                        <input hidden type="text"  class="form-control" name="supplierId" id="supplierId">
                        <div class="col-md-6">
                            <label for="SuppliersCode" class="form-label">Suppliers Code</label>
                            <input type="text" class="form-control" name="SuppliersCode" id="SuppliersCode">
                        </div>
                        <div class="col-md-6">
                            <label for="SuppliersName" class="form-label">Suppliers Name</label>
                            <input type="text" class="form-control" name="SuppliersName" id="SuppliersName">
                        </div>
                        <div class="col-4">
                            <label for="Contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="Contact" id="Contact">
                        </div>
                        <div class="col-4">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="Address" id="Address">
                        </div>
                        <div class="col-4">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email" id="Email">
                        </div>



                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Suppliers</button>
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
                <button class="nav-link active" id="AllSuppliersList-tab" data-bs-toggle="tab" data-bs-target="#AllSuppliersList" type="button" role="tab" aria-controls="AllSuppliersList" aria-selected="true">All Suppliers List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="SuppliersDefination-tab" data-bs-toggle="tab" data-bs-target="#SuppliersDefination" type="button" role="tab" aria-controls="SuppliersDefination" aria-selected="false">Suppliers Defination</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllSuppliersList" role="tabpanel" aria-labelledby="AllSuppliersList-tab">
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
                                                <th>Suppliers Code</th>
                                                <th>Suppliers Name</th>
                                                <th>Contact</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $pmm)
                                            <tr>
                                                <td>{{$pmm->supplier_code}}</td>
                                                <td>{{$pmm->supplier_name}}</td>
                                                <td>{{$pmm->supplier_contact}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-supplierscode="{{$pmm->supplier_code}}" data-name="{{$pmm->supplier_name}}" data-contact="{{$pmm->supplier_contact}}" data-address="{{$pmm->supplier_address}}" data-email="{{$pmm->supplier_email}}" data-toggle="modal" data-target="#suppliersModal">Edit</a></td>
                                                <td><a href="deletesupplier/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Suppliers Code</th>
                                                <th>Suppliers Name</th>
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

            <div class="tab-pane fade" id="SuppliersDefination" role="tabpanel" aria-labelledby="SuppliersDefination-tab">
                <div class="container-fluid">
                    <form class="row g-3" action="{{url('insertsupplier')}}" method="">
                        @csrf
                        <div class="col-md-6">
                            <label for="SuppliersCode" class="form-label">Suppliers Code</label>
                            <input type="text" class="form-control" name="SuppliersCode" id="SuppliersCode">
                        </div>
                        <div class="col-md-6">
                            <label for="SuppliersName" class="form-label">Suppliers Name</label>
                            <input type="text" class="form-control" name="SuppliersName" id="SuppliersName">
                        </div>
                        <div class="col-4">
                            <label for="Contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="Contact" id="Contact">
                        </div>
                        <div class="col-4">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="Address" id="Address">
                        </div>
                        <div class="col-4">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email" id="Email">
                        </div>



                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Suppliers</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
@stop