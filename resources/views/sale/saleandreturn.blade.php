@extends('welcome')

@section('data')

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form action="{{url('searchbtnfunction')}}" method="GET" id="sform">
            <div class="form-group">
                <input type="text" class="form-control" name="search" id="search" placeholder="Search by item Code/Name">
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Code</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if(isset($producecode))
                    <td>{{$producecode}}</td>
                    <td>{{$productname}}</td>
                    <td><input type="number"></td>
                    <td>{{$unitprice}}</td>
                    @else
                    <td colspan="3">Product not found</td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</main>

<script>
    $('body').keypress(function(e) {
        if (e.keyCode == 13) {
            $('#sform').submit();
        }
    });
</script>

@stop