<?php

namespace App\Http\Controllers;

use App\Models\tblcustomer;
use App\Models\tblgrn;
use App\Models\tblproduct;
use App\Models\tblproductcategory;
use App\Models\tblproductunit;
use App\Models\tblpurchaseorder;
use App\Models\tblsupplier;
use App\Models\tbluser;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Http\Controllers\Response;

class mainctrl extends Controller
{
    //

    function loginfunc()
    {
        return view('login');
    }

    function dashboardfunction()
    {
        return view('dashboard');
    }

    function itemdefinationfunc()
    {
        $pmm = tblproduct::all();
        $unitdata = tblproductunit::all();
        $catedata = tblproductcategory::all();
        $userdata = tbluser::all();
        return view('items.itemDefination')->with('abc', $pmm)->with('unitdata', $unitdata)->with('catedata', $catedata)->with('userdata', $userdata);
    }

    function insertfunctions(Request $myReq)
    {
        $tblpro = new tblproduct();
        $tblpro->produce_code = $myReq->ProductCode;
        $tblpro->product_name = $myReq->ProductName;
        $tblpro->category_id = $myReq->Category;
        $tblpro->unit_id  = $myReq->Unit;
        $tblpro->user_id  = $myReq->User;
        $tblpro->unit_in_stock = $myReq->UnitinStock;
        $tblpro->unit_price = $myReq->UnitPrice;
        $tblpro->discount_percentage = $myReq->DiscountPercentage;
        $tblpro->reorder_level = $myReq->ReorderLevel;
        $tblpro->save();

        return redirect('itemDefination');
    }


    function updateitemfunction(Request $myReq)
    {
        $tblpro = tblproduct::find($myReq->itemId);
        $tblpro->produce_code = $myReq->ProductCode;
        $tblpro->product_name = $myReq->ProductName;
        $tblpro->unit_in_stock = $myReq->UnitinStock;
        $tblpro->unit_price = $myReq->UnitPrice;
        $tblpro->reorder_level = $myReq->ReorderLevel;
        $tblpro->save();

        return redirect('itemDefination');
    }

    function deleteitemfunction(Request $myReq, $id)
    {
        $pm = tblproduct::destroy($id);

        return redirect('itemDefination');
    }

    function unitfunc()
    {
        $pmm = tblproductunit::all();
        return view('items.unit')->with('unitdata', $pmm);
    }

    function insertunitfunc(Request $myReq)
    {
        $tblprou = new tblproductunit();
        $tblprou->unit_name = $myReq->UnitName;
        $tblprou->save();

        return redirect('unit');
    }

    function updateunitfunction(Request $myReq)
    {
        $tblprouu = tblproductunit::find($myReq->unittId);
        $tblprouu->unit_name = $myReq->unittName;
        $tblprouu->save();

        return redirect('unit');
    }

    function deleteunitfunction(Request $myReq, $id)
    {
        $pm = tblproductunit::destroy($id);

        return redirect('unit');
    }


    function categoryfunc()
    {
        $pmm = tblproductcategory::all();
        return view('items.category')->with('abc', $pmm);
    }

    function insertcategoryfunc(Request $myReq)
    {
        $tblproc = new tblproductcategory();
        $tblproc->category_name = $myReq->CategoryName;
        $tblproc->save();

        return redirect('category');
    }

    function updatecategoryfunction(Request $myReq)
    {
        $tblprouu = tblproductcategory::find($myReq->categoryId);
        $tblprouu->category_name = $myReq->CategoryName;
        $tblprouu->save();

        return redirect('category');
    }

    function deletecategoryfunction(Request $myReq, $id)
    {
        $pm = tblproductcategory::destroy($id);

        return redirect('category');
    }

    function saleandreturnfunc(Request $request)
    {
        return view('sale.saleandreturn');
    }

    function autocompleteSearch(Request $request)
    {
        //$query = $request->get('query');

        //$filterResult = tblproduct::where('product_name', 'LIKE', '%' . $query . '%')->get();

        //return response()->json($filterResult);

        return tblproduct::select('product_name')
            ->where('product_name', 'like', "%{$request->term}%")
            ->pluck('product_name');
    }


    function searchbtnfunction(Request $myReq)
    {       
        $usersearch = $myReq->search;
        $uid = tblproduct::select('id')
            ->where('product_name',  "{$usersearch}")->pluck('id');
        //echo "{$uid}";

        if (isset($uid[0])) {
            $tblpro = tblproduct::find($uid);
            //echo "{{$tblpro}}";
            $producecode = $tblpro[0]->produce_code;
            $productname = $tblpro[0]->product_name;
            $unitprice = $tblpro[0]->unit_price;
            //$abcd = "Found Product";
            $data = array(
                'producecode'=>$producecode,
                'productname'=>$productname,
                'unitprice'=>$unitprice
                );

            return view('sale.saleandreturn')->with($data);
        } else {
            $abc = "Not Found Any  Product";
            return $abc;            
        }       
        
    }


    function purchaseorderfunction()
    {
        $pmm = tblpurchaseorder::all();
        $piddata = tblproduct::all();
        $uidata = tbluser::all();
        $siddata = tblsupplier::all();
        return view('purchase.purchaseorder')->with('abc', $pmm)->with('piddata', $piddata)->with('siddata', $siddata)->with('uidata', $uidata);
    }

    function insertpurchaseorderfunc(Request $myReq)
    {
        $tblpro = new tblpurchaseorder();
        $tblpro->product_id = $myReq->ProductId;
        $tblpro->supplier_id = $myReq->SupplierId;
        $tblpro->user_id  = $myReq->UserId;
        $tblpro->quantity  = $myReq->Quantity;
        $tblpro->unit_price  = $myReq->UnitPrice;
        $tblpro->sub_total = $myReq->SubTotal;
        $tblpro->order_date = $myReq->OrderDate;

        $tblpro->save();

        return redirect('purchaseorder');
    }


    function updatepurchaseorderfunction(Request $myReq)
    {
        $tblpro = tblpurchaseorder::find($myReq->purchaseId);
        $tblpro->product_id = $myReq->ProductId;
        $tblpro->supplier_id = $myReq->SupplierId;
        $tblpro->user_id = $myReq->UserId;
        $tblpro->quantity = $myReq->Quantity;
        $tblpro->unit_price = $myReq->UnitPrice;
        $tblpro->sub_total = $myReq->SubTotal;
        $tblpro->order_date = $myReq->OrderDate;
        $tblpro->save();
 
        return redirect('purchaseorder');
    }

    function deletepurchaseorderfunction(Request $myReq, $id)
    {
        $pm = tblpurchaseorder::destroy($id);

        return redirect('purchaseorder');
    }

    function grnfunction()
    {
        $pmm = tblgrn::all();
        $piddata = tblproduct::all();
        $uidata = tbluser::all();
        $siddata = tblsupplier::all();
        return view('purchase.grn')->with('abc', $pmm)->with('piddata', $piddata)->with('siddata', $siddata)->with('uidata', $uidata);
    }

    function insertgrnfunc(Request $myReq)
    {
        $tblpro = new tblgrn();
        $tblpro->produce_code = $myReq->ProductCode;
        $tblpro->product_name = $myReq->ProductName;
        $tblpro->product_id  = $myReq->ProductId;
        $tblpro->supplier_id   = $myReq->SupplierId;
        $tblpro->user_id   = $myReq->UserId;
        $tblpro->quantity = $myReq->Quantity;
        $tblpro->unit_price = $myReq->UnitPrice;
        $tblpro->sub_total = $myReq->SubTotal;
        $tblpro->received_date = $myReq->ReceivedDate;
        $tblpro->save();

        return redirect('grn');
    }


    function updategrnfunction(Request $myReq)
    {
        $tblpro = tblgrn::find($myReq->grnId);
        $tblpro->produce_code = $myReq->ProductCode;
        $tblpro->product_name = $myReq->ProductName;
        $tblpro->product_id  = $myReq->ProductId;
        $tblpro->supplier_id  = $myReq->SupplierId;
        $tblpro->user_id  = $myReq->UserId;
        $tblpro->quantity = $myReq->Quantity;
        $tblpro->unit_price = $myReq->UnitPrice;
        $tblpro->sub_total = $myReq->SubTotal;
        $tblpro->received_date = $myReq->ReceivedDate;
        $tblpro->save();

        return redirect('grn');
    }

    function deletegrnfunction(Request $myReq, $id)
    {
        $pm = tblgrn::destroy($id);

        return redirect('grn');
    }

    function customerfunction()
    {
        $pmm = tblcustomer::all();
        return view('parties.customers')->with('abc', $pmm);
    }

    function insertcustomerfunc(Request $myReq)
    {
        $tblpro = new tblcustomer();
        $tblpro->customer_code = $myReq->CustomerCode;
        $tblpro->customer_name = $myReq->CustomerName;
        $tblpro->contact = $myReq->Contact;
        $tblpro->address  = $myReq->Address;

        $tblpro->save();

        return redirect('customer');
    }


    function updatecustomerfunction(Request $myReq)
    {
        $tblpro = tblcustomer::find($myReq->customerId);
        $tblpro->customer_code = $myReq->CustomerCode;
        $tblpro->customer_name = $myReq->CustomerName;
        $tblpro->contact = $myReq->Contact;
        $tblpro->address = $myReq->Address;

        $tblpro->save();

        return redirect('customer');
    }

    function deletecustomerfunction(Request $myReq, $id)
    {
        $pm = tblcustomer::destroy($id);

        return redirect('customer ');
    }

    function supplierfunction()
    {
        $pmm = tblsupplier::all();
        return view('parties.suppliers')->with('abc', $pmm);
    }

    function insertsupplierfunc(Request $myReq)
    {
        $tblpro = new tblsupplier();
        $tblpro->supplier_code = $myReq->SuppliersCode;
        $tblpro->supplier_name = $myReq->SuppliersName;
        $tblpro->supplier_contact = $myReq->Contact;
        $tblpro->supplier_address  = $myReq->Address;
        $tblpro->supplier_email  = $myReq->Email;

        $tblpro->save();

        return redirect('supplier');
    }


    function updatesupplierfunction(Request $myReq)
    {
        $tblpro = tblsupplier::find($myReq->supplierId);
        $tblpro->supplier_code = $myReq->SuppliersCode;
        $tblpro->supplier_name = $myReq->SuppliersName;
        $tblpro->supplier_contact = $myReq->Contact;
        $tblpro->supplier_address = $myReq->Address;
        $tblpro->supplier_email = $myReq->Email;
        $tblpro->save();

        return redirect('supplier');
    }

    function deletesupplierfunction(Request $myReq, $id)
    {
        $pm = tblsupplier::destroy($id);

        return redirect('supplier');
    }

    function userfunction()
    {
        $pmm = tbluser::all();
        return view('security.securityuser')->with('abc', $pmm);
    }

    function insertuserfunc(Request $myReq)
    {
        $tblpro = new tbluser();
        $tblpro->username = $myReq->userName;
        $tblpro->password = $myReq->password;
        $tblpro->fullname = $myReq->fullName;
        $tblpro->designation  = $myReq->Contact;
        $tblpro->contact  = $myReq->Designation;
        $tblpro->account_type = $myReq->accountType;

        $tblpro->save();

        return redirect('user');
    }


    function updateuserfunction(Request $myReq)
    {
        $tblpro = tbluser::find($myReq->userId);
        $tblpro->username = $myReq->userName;
        $tblpro->password = $myReq->password;
        $tblpro->fullname = $myReq->fullName;
        $tblpro->designation = $myReq->Contact;
        $tblpro->contact = $myReq->Designation;
        $tblpro->account_type = $myReq->accountType;
        $tblpro->save();

        return redirect('user');
    }

    function deleteuserfunction(Request $myReq, $id)
    {
        $pm = tbluser::destroy($id);

        return redirect('user');
    }

    function verifyloginfunction(Request $myReq)
    {
        $userinput = $myReq->user;
        $passinput = $myReq->pass;
        $uid = tbluser::select('id')
            ->where('username',  "{$userinput}")->pluck('id');

        if (isset($uid[0])) {
            $tblpro = tbluser::find($uid);
            //echo "{{$tblpro[0]->username}}";
            $userdb = $tblpro[0]->username;
            $passdb = $tblpro[0]->password;
            if ($userinput == $userdb && $passinput == $passdb) {
                return redirect('dashboard');
            } else {
                return view('login');
            }
        } else {
            //$abc = "both u and p wrong";
            return view('login');
        }




        //return redirect('dashboard');
    }
}
