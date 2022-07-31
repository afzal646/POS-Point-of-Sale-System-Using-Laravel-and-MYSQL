@extends('welcome')

@section('data')
<!-- Modal -->
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{url('updateitem')}}" method="">
                    @csrf
                    <input hidden type="text" value="id" class="form-control" name="itemId" id="itemId">
                    <div class="col-md-6">
                        <label for="ProductCode" class="form-label">Product Code</label>
                        <input readonly type="text" class="form-control" name="ProductCode" id="ProductCode">
                    </div>
                    <div class="col-md-6">
                        <label for="ProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="ProductName" id="ProductName">
                    </div>
                    <div class="col-4">
                        <label for="UnitinStock" class="form-label">Unit in Stock</label>
                        <input type="text" class="form-control" name="UnitinStock" id="UnitinStock">
                    </div>
                    <div class="col-4">
                        <label for="UnitPrice" class="form-label">Unit Price</label>
                        <input type="text" class="form-control" name="UnitPrice" id="UnitPrice">
                    </div>

                    <div class="col-md-3">
                        <label for="ReorderLevel" class="form-label">Reorder Level</label>
                        <input type="text" class="form-control" name="ReorderLevel" id="ReorderLevel">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
                <button class="nav-link active" id="AllItemsList-tab" data-bs-toggle="tab" data-bs-target="#AllItemsList" type="button" role="tab" aria-controls="AllItemsList" aria-selected="true">All Items List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="ItemDefination-tab" data-bs-toggle="tab" data-bs-target="#ItemDefination" type="button" role="tab" aria-controls="ItemDefination" aria-selected="false">Item Defination</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="AllItemsList" role="tabpanel" aria-labelledby="AllItemsList-tab">
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
                                                <th>Product Code</th>
                                                <th>Product Name</th>
                                                <th>Unit Price</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abc as $pmm)
                                            <tr>
                                                <td>{{$pmm->produce_code}}</td>
                                                <td>{{$pmm->product_name}}</td>
                                                <td>{{$pmm->unit_price}}</td>
                                                <td><a href="#" class="btn btn-primary" data-id="{{$pmm->id}}" data-productcode="{{$pmm->produce_code}}" data-name="{{$pmm->product_name}}" data-uis="{{$pmm->unit_in_stock}}" data-unitprice="{{$pmm->unit_in_stock}}" data-reorderlevel="{{$pmm->reorder_level}}" data-toggle="modal" data-target="#itemModal">Edit</a></td>
                                                <td><a href="deleteitem/{{$pmm->id}}" class="btn btn-danger">Delete</a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Product Code</th>
                                                <th>Product Name</th>
                                                <th>Unit Price</th>
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

            <div class="tab-pane fade" id="ItemDefination" role="tabpanel" aria-labelledby="ItemDefination-tab">
                <div class="container-fluid">
                    <form class="row g-3" action="{{url('insert')}}" method="">
                        @csrf
                        <div class="col-md-6">
                            <label for="ProductCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control" name="ProductCode" id="ProductCode">
                        </div>
                        <div class="col-md-6">
                            <label for="ProductName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="ProductName" id="ProductName">
                        </div>
                        <div class="col-4">
                            <label for="UnitinStock" class="form-label">Unit in Stock</label>
                            <input type="text" class="form-control" name="UnitinStock" id="UnitinStock">
                        </div>
                        <div class="col-4">
                            <label for="UnitPrice" class="form-label">Unit Price</label>
                            <input type="text" class="form-control" name="UnitPrice" id="UnitPrice">
                        </div>
                        <div class="col-md-4">
                            <label for="DiscountPercentage" class="form-label">Discount Percentage</label>
                            <input type="text" class="form-control" name="DiscountPercentage" id="DiscountPercentage">
                        </div>
                        <div class="col-md-3">
                            <label for="Category" class="form-label">Category</label>
                            <select id="Category" name="Category" class="form-select">
                                @foreach($catedata as $catedata)
                                <option value="{{ $catedata->id }}">{{ $catedata->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="Unit" class="form-label">Unit</label>
                            <select id="Unit" name="Unit" class="form-select">

                                @foreach($unitdata as $unitdata)
                                <option value="{{ $unitdata->id }}">{{ $unitdata->unit_name}}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="User" class="form-label">User</label>
                            <select id="User" name="User" class="form-select">


                                @foreach($userdata as $userdata)
                                <option value="{{ $userdata->id }}">{{ $userdata->username}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="ReorderLevel" class="form-label">Reorder Level</label>
                            <input type="text" class="form-control" name="ReorderLevel" id="ReorderLevel">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Item</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>





    </div>
</main>
@stop