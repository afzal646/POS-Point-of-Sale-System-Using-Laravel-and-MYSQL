@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="grnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit GRN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{url('updategrn')}}" method="">
                    @csrf
                    <input hidden type="text" class="form-control" name="grnId" id="grnId">
                    <div hidden class="col-md-6">
                        <label for="ProductCode" class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="ProductCode" id="ProductCode">
                    </div>
                    <div hidden class="col-md-6">
                        <label for="ProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="ProductName" id="ProductName">
                    </div>
                    <div hidden class="col-md-6">
                        <label for="ProductId" class="form-label">Product Id</label>
                        <input type="text" class="form-control" name="ProductId" id="ProductId">
                    </div>
                    <div hidden class="col-md-6">
                        <label for="SupplierId" class="form-label">Supplier Id</label>
                        <input type="text" class="form-control" name="SupplierId" id="SupplierId">
                    </div>
                    <div hidden class="col-4">
                        <label for="UserId" class="form-label">User Id</label>
                        <input type="text" class="form-control" name="UserId" id="UserId">
                    </div>
                    <div class="col-4">
                        <label for="Quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="Quantity" id="Quantity">
                    </div>
                    <div class="col-md-6">
                        <label for="UnitPrice" class="form-label">Unit Price</label>
                        <input type="text" class="form-control" name="UnitPrice" id="UnitPrice">
                    </div>
                    <div class="col-4">
                        <label for="SubTotal" class="form-label">Sub Total</label>
                        <input type="text" class="form-control" name="SubTotal" id="SubTotal">
                    </div>
                    <div class="col-4">
                        <label for="ReceivedDate" class="form-label">Received Date</label>
                        <input type="text" class="form-control" name="ReceivedDate" id="ReceivedDate">
                    </div>



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add GRN</button>
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
                <button class="nav-link active" id="AllGRN-tab" data-bs-toggle="tab" data-bs-target="#AllGRN" type="button" role="tab" aria-controls="AllGRN" aria-selected="true">All GRN</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="GRNDefination-tab" data-bs-toggle="tab" data-bs-target="#GRNDefination" type="button" role="tab" aria-controls="GRNDefination" aria-selected="false">GRN Defination</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllGRN" role="tabpanel" aria-labelledby="AllGRN-tab">
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
                                                <th>Product Id</th>
                                                <th>Supplier Id</th>
                                                <th>Sub_Total</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $pmm)
                                            <tr>
                                                <td>{{$pmm->product_id}}</td>
                                                <td>{{$pmm->supplier_id}}</td>
                                                <td>{{$pmm->sub_total}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-producecode="{{$pmm->produce_code}}" data-productname="{{$pmm->product_name}}" data-productid="{{$pmm->product_id}}" data-supplierid="{{$pmm->supplier_id}}" data-userid="{{$pmm->user_id}}" data-quantity="{{$pmm->quantity}}" data-unitprice="{{$pmm->unit_price}}" data-subtotal="{{$pmm->sub_total}}" data-receiveddate="{{$pmm->received_date}}" data-toggle="modal" data-target="#grnModal">Edit</a></td>
                                                <td><a href="deletegrn/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Product Id</th>
                                                <th>Supplier Id</th>
                                                <th>Sub_Total</th>
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

            <div class="tab-pane fade" id="GRNDefination" role="tabpanel" aria-labelledby="GRNDefination-tab">
                <div class="container-fluid">
                    <form class="row g-3" action="{{url('insertgrn')}}" method="">
                        @csrf
                        <div hidden class="col-md-6">
                            <label for="ProductCode" class="form-label">Product Code</label>
                            <input type="text" readonly class="form-control" name="ProductCode" id="ProductCode">
                        </div>
                        <div class="col-md-6">
                            <label for="ProductName" class="form-label">Product Name</label>

                            <select id="ProductName" name="ProductName" class="form-select">
                                @foreach($piddata as $piddata)
                                <option value="{{ $piddata->product_name }}">{{ $piddata->product_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div hidden class="col-md-6">
                            <label for="ProductId" class="form-label">Product Id</label>
                            <input type="text" readonly class="form-control" name="ProductId" id="ProductId">
                        </div>
                        <div class="col-md-6">
                            <label for="SupplierId" class="form-label">Supplier Id</label>

                            <select id="SupplierId" name="SupplierId" class="form-select">
                                @foreach($siddata as $siddata)
                                <option value="{{ $siddata->id }}">{{ $siddata->supplier_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="UserId" class="form-label">User Id</label>
                            <select id="UserId" name="UserId" class="form-select">
                                @foreach($uidata as $uidata)
                                <option value="{{ $uidata->id }}">{{ $uidata->username}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-4">
                            <label for="Quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" name="Quantity" id="Quantity">
                        </div>
                        <div class="col-md-6">
                            <label for="UnitPrice" class="form-label">Unit Price</label>
                            <input type="text" value="455" class="form-control" name="UnitPrice" id="UnitPrice">
                        </div>
                        <div class="col-4">
                            <label for="SubTotal" class="form-label">Sub Total</label>
                            <input type="text" class="form-control" name="SubTotal" id="SubTotal">
                        </div>
                        <div class="col-4">
                            <label for="ReceivedDate" class="form-label">Received Date</label>
                            <input type="date" class="form-control" name="ReceivedDate" id="ReceivedDate">
                        </div>



                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add GRN</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>

@stop