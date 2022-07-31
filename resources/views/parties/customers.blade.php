@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="customersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Customers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="row g-3" action="{{url('updatecustomer')}}" method="">
                        @csrf
                        <input hidden type="text"  class="form-control" name="customerId" id="customerId">
                        <div class="col-md-6">
                            <label for="CustomerCode" class="form-label">Customer Code</label>
                            <input type="text" class="form-control" name="CustomerCode" id="CustomerCode">
                        </div>
                        <div class="col-md-6">
                            <label for="CustomerName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="CustomerName" id="CustomerName">
                        </div>
                        <div class="col-4">
                            <label for="Contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="Contact" id="Contact">
                        </div>
                        <div class="col-4">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="Address" id="Address">
                        </div>                     
                        
                       

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Customer</button>
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
                <button class="nav-link active" id="AllCustomerList-tab" data-bs-toggle="tab" data-bs-target="#AllCustomerList" type="button" role="tab" aria-controls="AllCustomerList" aria-selected="true">All Customer List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="CustomerDefination-tab" data-bs-toggle="tab" data-bs-target="#CustomerDefination" type="button" role="tab" aria-controls="CustomerDefination" aria-selected="false">Customer Defination</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllCustomerList" role="tabpanel" aria-labelledby="AllCustomerList-tab">
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
                                                <th>Customer Code</th>
                                                <th>Customer Name</th>
                                                <th>Contact</th>                                                
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $pmm)
                                            <tr>
                                                <td>{{$pmm->customer_code}}</td>
                                                <td>{{$pmm->customer_name}}</td>
                                                <td>{{$pmm->contact}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-customercode="{{$pmm->customer_code}}" data-name="{{$pmm->customer_name}}" data-contact="{{$pmm->contact}}" data-address="{{$pmm->address}}" data-toggle="modal" data-target="#customersModal">Edit</a></td>
                                                <td><a href="deletecustomer/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Customer Code</th>
                                                <th>Customer Name</th>
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

            <div class="tab-pane fade" id="CustomerDefination" role="tabpanel" aria-labelledby="CustomerDefination-tab">
                <div class="container-fluid">
                    <form class="row g-3" action="{{url('insertcustomer')}}" method="">
                        @csrf
                        <div class="col-md-6">
                            <label for="CustomerCode" class="form-label">Customer Code</label>
                            <input type="text" class="form-control" name="CustomerCode" id="CustomerCode">
                        </div>
                        <div class="col-md-6">
                            <label for="CustomerName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="CustomerName" id="CustomerName">
                        </div>
                        <div class="col-4">
                            <label for="Contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="Contact" id="Contact">
                        </div>
                        <div class="col-4">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="Address" id="Address">
                        </div>                     
                        
                       

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Customer</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
@stop