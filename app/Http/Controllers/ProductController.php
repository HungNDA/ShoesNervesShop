<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbproducer;
class ProductController extends Controller
{

    //Phan nay cua Hung

//    public function index()
//    {
//     $data = Tbproduct::get();
//     return view('admin.adminProduct', compact('data'));
//    }

   public function showProducer()
   {
    $data = Tbproducer::get();
    return view('admin.add', compact('data'));
   }

   public function save(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $details = $request->details;
        $image1 = $request->file('image1')->getClientOriginalName();
        $request->image1->move(public_path('admin/img/product-Image'),$image1);
        $producer = $request->producer;

        $product = new Tbproduct();

        $product->productID = $id;
        $product->productName = $name;
        $product->productPrice = $price;
        $product->productDetail = $details;
        $product->productImage1 = $image1;
        $product->producerID = $producer;

        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');

    }

    public function delete($id)
    {
        Tbproduct::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function editProduct($id)
    {
        $producer = Tbproducer::get();
        $data = Tbproduct::where('productID', '=', $id)->first();
        return view('admin.update', compact('data', 'producer'));

    }

    public function updateProduct(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $details = $request->details;
        $image1 = $request->file('image1')->getClientOriginalName();
        $request->image1->move(public_path('admin/img/product-Image'),$image1);
        $producer = $request->producer;


        Tbproduct::where('productID', '=', $id)->update([
            'productName'=>$name,
            'productPrice'=>$price,
            'productDetail'=>$details,
            'productImage1'=>$image1,
            'producerID'=>$producer
        ]);

        return redirect()->back()->with('success', 'Product updated successfully!');
    }
    //het phan cua Hung

    //phan nay cua Quan

    public function showInfProducer()
    {
        $data = Tbproducer::get();
    return view('admin.showProducer', compact('data'));
    }


    public function addProducer()
    {
        return view('admin.addProducer');
    }


    public function saveProducer(Request $request)
    {
        $id = $request->id;
        $name = $request->name;

        $producer = new Tbproducer();

        $producer->producerID = $id;
        $producer->producerName = $name;
        $producer->save();

        return redirect()->back()->with('success', 'Producer added successfully!');

    }

    public function deleteProducer($id)
    {
        Tbproducer::where('producerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Producer deleted successfully!');
    }

    public function editProducer($id)
    {
        $producer = Tbproducer::where('producerID', '=', $id)->first();
        return view('admin.updateProducer', compact('producer'));

    }


    public function updateProducer(Request $request)
    {
        $id = $request->id;
        $name = $request->name;

        Tbproducer::where('producerID', '=', $id)->update([
            'producerName'=>$name,
        ]);

        return redirect()->back()->with('success', 'Producer updated successfully!');
    }
    //het phan cua Quan
}
