@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Purchase</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{url('updatepurchaseorder')}}" method="">
                    @csrf
                    <input hidden type="text" class="form-control" name="purchaseId" id="purchaseId">
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
                        <label for="OrderDate" class="form-label">Order Date</label>
                        <input type="text" class="form-control" name="OrderDate" id="OrderDate">
                    </div>



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add Purchase</button>
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
                <button class="nav-link active" id="AllPurchaseOrder-tab" data-bs-toggle="tab" data-bs-target="#AllPurchaseOrder" type="button" role="tab" aria-controls="AllPurchaseOrder" aria-selected="true">All Purchase Order</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="PurchaseOrderDefination-tab" data-bs-toggle="tab" data-bs-target="#PurchaseOrderDefination" type="button" role="tab" aria-controls="PurchaseOrderDefination" aria-selected="false">Purchase Order Defination</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllPurchaseOrder" role="tabpanel" aria-labelledby="AllPurchaseOrder-tab">
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
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-productid="{{$pmm->product_id}}" data-supplierid="{{$pmm->supplier_id}}" data-userid="{{$pmm->user_id}}" data-quantity="{{$pmm->quantity}}" data-unitprice="{{$pmm->unit_price}}" data-subtotal="{{$pmm->sub_total}}" data-orderdate="{{$pmm->order_date}}" data-toggle="modal" data-target="#purchaseModal">Edit</a></td>
                                                <td><a href="deletepurchaseorder/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>

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

            <div class="tab-pane fade" id="PurchaseOrderDefination" role="tabpanel" aria-labelledby="PurchaseOrderDefination-tab">
                <div class="container-fluid">
                    <form class="row g-3" action="{{url('insertpurchaseorder')}}" method="">
                        @csrf
                        <div class="col-md-6">
                            <label for="ProductId" class="form-label">Product Name</label>

                            <select id="ProductId" name="ProductId" class="form-select">
                                @foreach($piddata as $piddata)
                                <option value="{{ $piddata->id }}">{{ $piddata->product_name}}</option>
                                @endforeach
                            </select>
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
                            <input type="text" class="form-control" name="UnitPrice" id="UnitPrice">
                        </div>
                        <div class="col-4">
                            <label for="SubTotal" class="form-label">Sub Total</label>
                            <input type="text" class="form-control" name="SubTotal" id="SubTotal">
                        </div>
                        <div class="col-4">
                            <label for="OrderDate" class="form-label">Order Date</label>
                            <input type="date" class="form-control" name="OrderDate" id="OrderDate">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Purchase</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>


@stop