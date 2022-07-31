@extends('welcome')

@section('data')
<main class="mt-5 pt-3">
  <div class="container-fluid">


    <section class="qucik_links" style="padding-top:10px">

      <div class="quick_link_box"><a class="linkd" href="{{url('itemDefination')}}"><i class="fs-1 fa fa-newspaper-o"></i>
          <p class="p-2">Define Item</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="{{url('grn')}}"><i class="fs-1 fa fa-file-text"></i>
          <p class="p-2">Receive Goods</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="{{url('saleandreturn')}}"><i class="fs-1 fa fa-shopping-cart"></i>
          <p class="p-2">Make a sale</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="/StoreClosing"><i class="fs-1 fa fa-sun-o"></i>
          <p class="p-2">Day Close</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="/Discount/Discount"><i class="fs-1 fa fa-percent"></i>
          <p class="p-2">Promotions</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="/SupplierPayments"><i class="fs-1 fa fa-calculator"></i>
          <p class="p-2">Supplier Payment</p>
        </a></div>
      <br>
      <div class="quick_link_box"><a class="linkd" href="/ShopSalesReport"><i class="fs-1 fa fa-line-chart"></i>
          <p class="p-2">Sale Report</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="/InventorySnapshotReport"><i class="fs-1 fa fa-bar-chart-o"></i>
          <p class="p-2">Stock Report</p>
        </a></div>
      <div class="quick_link_box"><a class="linkd" href="/ShopIncomeStatementReport"><i class="fs-1 fa fa-area-chart"></i>
          <p class="p-2">Income Statement</p>
        </a></div>

    </section>


    <section class="latest_update">
      <div class="date_updates" style="padding-right: 5%;text-align:right">
        <label id="updatedTime" style="display:none"></label>
        <a href="JavaScript:void(0)" class="RefreshButton tooltip" id="refreshBtn" onclick='refresh()' title="Get latest values"><i class="fa fa-refresh" style="margin-right: 5px;"></i>Refresh</a>
      </div>
      <div class="latest_update_info_container">

        <div class="latest_update_info_box brows_color"><img src="/image/yesterday_sale_icon.png" alt="" />
          <h3 id="YesterdaySale">...</h3>
          <p>Yesterday's Sale</p>
        </div>
        <div class="latest_update_info_box brows_color" title="Yesterday's Receipt Count"><img src="/image/yesterday_sale_icon.png" alt="" />
          <h3 id="YesterdaySaleCount">...</h3>
          <p>Receipt Count</p>
        </div>
        

        <div class="latest_update_info_box blue_color">
          <a href="JavaScript:void(0)" class="circle_icon tooltip" style="display: inline-block;" id="refreshBtnSale" onclick='refreshTodaySale()' title="Get latest Today's Sale"><i class="fa fa-refresh"></i></a>
          <img src="/image/sale_icon.png" alt="" />
          <h3 id="TodaySale">...</h3>
          <p>Today's Sale</p>
        </div>
        <div class="latest_update_info_box blue_color" title="Today's Receipt Count">
          <a href="JavaScript:void(0)" class="circle_icon tooltip" style="display: inline-block;" id="refreshBtnSaleCount" onclick='refreshTodaySaleCount()' title="Get latest Today's Receipt Count"><i class="fa fa-refresh"></i></a>
          <img src="/image/sale_icon.png" alt="" />
          <h3 id="TodaySaleCount">...</h3>
          <p>Receipt Count</p>
        </div>
        <div class="latest_update_info_box purple_color"><img src="/image/net_pay_icon.png" alt="" />
          <h3 id="NetPayable">...</h3>
          <p>Net Payable</p>
        </div>
        <div class="latest_update_info_box pink_color"><img src="/image/receivable_icon.png" alt="" />
          <h3 id="NetReceivable">...</h3>
          <p>Net Receivable</p>
        </div>
        <div class="latest_update_info_box orange_color" style="display:none"><img src="/image/customer_count.png" alt="" />
          <h3 id="NoOfCustomers">...</h3>
          <p>Customers Count</p>
        </div>
        <div class="latest_update_info_box blueDark_color HideOnSmallDevice" style="display:none"><img src="/images/Dashboard/supplier_icon.png" alt="" />
          <h3 id="NoOfSuppliers">...</h3>
          <p>Suppliers Count</p>
        </div>
        <div class="latest_update_info_box green_color noOfItemDiv"><img src="/image/count_icon.png" alt="" />
          <h3 id="NoOfItems">...</h3>
          <p>Items Count</p>
        </div>
      </div>
    </section>


    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="card h-100">
          <div class="card-header">
            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
            Area Chart Example
          </div>
          <div class="card-body">
            <canvas class="chart" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="card h-100">
          <div class="card-header">
            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
            Area Chart Example
          </div>
          <div class="card-body">
            <canvas class="chart" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>


    
  </div>
</main>
@stop