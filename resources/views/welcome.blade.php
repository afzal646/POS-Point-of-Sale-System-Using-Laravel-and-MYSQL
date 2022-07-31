<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />


    <title>Afzal Traders - Ghala Mandi Dina</title>


</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="{{url('/dashboard')}}">POS SYSTEM</a>


            </button>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><span class="me-2"><i class="fa-solid fa-gear"></i></span>Profile Setting</a></li>
                        <li><a class="dropdown-item" href="#"><span class="me-2"><i class="fa-solid fa-user"></i></span>Change Password</a></li>
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}"><span class="me-2"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="{{url('/dashboard')}}" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <li hidden>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Configuration">
                            <span class="me-2"><i class="fa-solid fa-gear"></i></span>
                            <span>Configuration</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Configuration">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; System Configuration</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Store Configuration</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Department</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; City</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Items">
                            <span class="me-2"><i class="fa fa-sitemap"></i></span>
                            <span>Items</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Items">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{url('itemDefination')}}" class="nav-link px-3">
                                        <span>&nbsp; Items Defination</span>
                                    </a>
                                </li>
                                <li hidden>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Import Items Data</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('unit')}}" class="nav-link px-3">
                                        <span>&nbsp; Unit</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('category')}}" class="nav-link px-3">
                                        <span>&nbsp; Category</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Purchase">
                            <span class="me-2"><i class="fa fa-shopping-basket"></i></span>
                            <span>Purchase</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Purchase">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{url('purchaseorder')}}" class="nav-link px-3">
                                        <span>&nbsp; Purchase Order</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('grn')}}" class="nav-link px-3">
                                        <span>&nbsp; GRN</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Sale">
                            <span class="me-2"><i class="fa fa-shopping-cart"></i></span>
                            <span>Sale</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Sale">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{url('saleandreturn')}}" class="nav-link px-3">
                                        <span>&nbsp; Sales and Return</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li hidden>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Inventory">
                            <span class="me-2"><i class="fa fa-laptop"></i></span>
                            <span>Inventory MGMT</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Inventory">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Inventory Levels</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Parties">
                            <span class="me-2"><i class="fa fa-group"></i></span>
                            <span>Parties</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Parties">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{url('customer')}}" class="nav-link px-3">
                                        <span>&nbsp; Customers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('supplier')}}" class="nav-link px-3">
                                        <span>&nbsp; Suppliers</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li hidden>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Reports">
                            <span class="me-2"><i class="fa fa-line-chart"></i></span>
                            <span>Reports</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Reports">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Sale Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Purchase Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Stock Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span>&nbsp; Customer Report</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Security">
                            <span class="me-2"><i class="fa fa-shield"></i></span>
                            <span>Security</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="Security">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{url('user')}}" class="nav-link px-3">
                                        <span>&nbsp; Security Users</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->

    @yield('data')

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ URL::asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/994dc19d74.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).on('show.bs.modal', '#unitModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var myid = button.data('id')
            var myname = button.data('name')


            var modal = $(this)
            modal.find('.modal-body #UnitId').val(myid)
            modal.find('.modal-body #UnitName').val(myname)
        })

        $(document).on('show.bs.modal', '#categoryModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var myid = button.data('id')
            var myname = button.data('name')


            var modal = $(this)
            modal.find('.modal-body #categoryId').val(myid)
            modal.find('.modal-body #CategoryName').val(myname)
        })


        $(document).on('show.bs.modal', '#itemModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var productcode = button.data('productcode')
            var myname = button.data('name')
            var uis = button.data('uis')
            var unitprice = button.data('unitprice')
            var reorderlevel = button.data('reorderlevel')


            var modal = $(this)
            modal.find('.modal-body #itemId').val(id)
            modal.find('.modal-body #ProductCode').val(productcode)
            modal.find('.modal-body #ProductName').val(myname)
            modal.find('.modal-body #UnitinStock').val(uis)
            modal.find('.modal-body #UnitPrice').val(unitprice)
            modal.find('.modal-body #ReorderLevel').val(reorderlevel)
        })

        $(document).on('show.bs.modal', '#customersModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var customercode = button.data('customercode')
            var name = button.data('name')
            var contact = button.data('contact')
            var address = button.data('address')

            var modal = $(this)
            modal.find('.modal-body #customerId').val(id)
            modal.find('.modal-body #CustomerCode').val(customercode)
            modal.find('.modal-body #CustomerName').val(name)
            modal.find('.modal-body #Contact').val(contact)
            modal.find('.modal-body #Address').val(address)

        })

        $(document).on('show.bs.modal', '#suppliersModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var supplierscode = button.data('supplierscode')
            var name = button.data('name')
            var contact = button.data('contact')
            var address = button.data('address')
            var email = button.data('email')


            var modal = $(this)
            modal.find('.modal-body #supplierId').val(id)
            modal.find('.modal-body #SuppliersCode').val(supplierscode)
            modal.find('.modal-body #SuppliersName').val(name)
            modal.find('.modal-body #Contact').val(contact)
            modal.find('.modal-body #Address').val(address)
            modal.find('.modal-body #Email').val(email)
        })

        $(document).on('show.bs.modal', '#grnModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var producecode = button.data('producecode')
            var productname = button.data('productname')
            var productid = button.data('productid')
            var supplierid = button.data('supplierid')
            var userid = button.data('userid')
            var quantity = button.data('quantity')
            var unitprice = button.data('unitprice')
            var subtotal = button.data('subtotal')
            var receiveddate = button.data('receiveddate')


            var modal = $(this)
            modal.find('.modal-body #grnId').val(id)
            modal.find('.modal-body #ProductCode').val(producecode)
            modal.find('.modal-body #ProductName').val(productname)
            modal.find('.modal-body #ProductId').val(productid)
            modal.find('.modal-body #SupplierId').val(supplierid)
            modal.find('.modal-body #UserId').val(userid)
            modal.find('.modal-body #Quantity').val(quantity)
            modal.find('.modal-body #UnitPrice').val(unitprice)
            modal.find('.modal-body #SubTotal').val(subtotal)
            modal.find('.modal-body #ReceivedDate').val(receiveddate)
        })

        $(document).on('show.bs.modal', '#purchaseModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var productid = button.data('productid')
            var supplierid = button.data('supplierid')
            var userid = button.data('userid')
            var quantity = button.data('quantity')
            var unitprice = button.data('unitprice')
            var subtotal = button.data('subtotal')
            var orderdate = button.data('orderdate')


            var modal = $(this)
            modal.find('.modal-body #purchaseId').val(id)
            modal.find('.modal-body #ProductId').val(productid)
            modal.find('.modal-body #SupplierId').val(supplierid)
            modal.find('.modal-body #UserId').val(userid)
            modal.find('.modal-body #Quantity').val(quantity)
            modal.find('.modal-body #UnitPrice').val(unitprice)
            modal.find('.modal-body #SubTotal').val(subtotal)
            modal.find('.modal-body #OrderDate').val(orderdate)
        })

        $(document).on('show.bs.modal', '#userModal', function(event) {
            console.log('modal opened')
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var username = button.data('username')
            var name = button.data('name')
            var contact = button.data('contact')
            var password = button.data('password')
            var designation = button.data('designation')
            var accounttype = button.data('accounttype')


            var modal = $(this)
            modal.find('.modal-body #userId').val(id)
            modal.find('.modal-body #userName').val(username)
            modal.find('.modal-body #fullName').val(name)
            modal.find('.modal-body #Contact').val(contact)
            modal.find('.modal-body #password').val(password)
            modal.find('.modal-body #Designation').val(designation)
            modal.find('.modal-body #accountType').val(accounttype)
        })
    </script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('autocompleteSearch') }}";
        $('#search').typeahead({
            source: function(query, process) {
                return $.get(route, {
                    term: query                
                } , function(data) {                                        
                    //document.write("<h1>" + data + "</h1>")                  
                    return process(data);
                });
            }
        });
    </script>

</body>

</html>