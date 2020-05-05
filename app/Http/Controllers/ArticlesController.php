<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Order;
use App\Order_details;
use App\Customer;
use Auth;
use App\User;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAll(Request $request)
    {
        if($request->ajax()){

            $articles = Article::all();
            $types = $articles->pluck("type");
            $pizza = Article::where("type", "=", "pizza")->get();

            $response = array(
                //'pagination'=>(string) $pizza->links(),
                "types" => $types,
                "articles" => $articles,
            );
            
            return response()->json($response);

        }
    }

    public function indexSpec(Request $request)
    {
        if($request->ajax()){
            $defaultType = "pizza";
            $type = $request->type ? $request->type : $defaultType;
            $users = User::all();
            $articlesAll = Article::all();
            $types = $articlesAll->pluck("type");

            $articles = Article::where("type", "=", $type)->get();

            $orders = Order::all();
            $order_details = Order_details::all();
            $response = array(
                "authUser" => auth()->user() ? auth()->user() : null,
                "articles" => $articles,
                "types" => $types,
                "type" => $type,
                "users" => $users,
                "orders" => $orders,
                "order_details" => $order_details,
            );
            
            return response()->json($response);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){

            $array = array_count_values($request->articleIds);

            $customer = null;
            if($request->ifRegistred){

                $user = User::find($request->ifRegistred);
                $customer = new Customer;
                $customer->username = $user->name;
                $customer->address = $user->address;
                $customer->save();

            }
            else{

                $customer = new Customer;
                $customer->username = $request->username;
                $customer->address = $request->address;
                $customer->save();

            }

            $order = new Order;
            $order->customer_id = $customer->id;
            $total_price = 0;
            for($i=0;$i<count($request->articleIds);$i++){

                $article = Article::find($request->articleIds[$i]);
                $total_price += $article->price;
                
            }
            $order->total_price = $total_price;
            $order->save();

            foreach($array as $key => $value){
                $order_details = new Order_details;
                $order_details->order_id = $order->id;
                $order_details->article_id = $key;
                $order_details->quantity = $value;
                $order_details->save();
            }
            
            $response = array(
                "array" => $array,
                "message" => "bravo",
                "articleIds" => $request->articleIds,
                "user" => $request->username,
                "requestAll" => $request->all(),
            );
            
            return response()->json($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        $response = array(
            "article" => $article,
        );
        
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
