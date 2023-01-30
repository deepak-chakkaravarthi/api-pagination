<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\zoho_inbound;
use Illuminate\Pagination\LengthAwarePaginator;
class productcontroller extends Controller
{
    // public function frondend(){
        
    //     return zoho_inbound::all();
    // }
    public function backend(Request $request){
         $query = zoho_inbound::query(); 
          
         $perPage = 9;
        //  $perpages = 9;
         $page = $request->input('page', 1);
         $numofdata = $request->input('numofdata');
         if($numofdata > 1){
            $perPage =  $numofdata;
         }else{
            $perPage = 9;
         }
         $total = $query->count();
 
         $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
        //  $result = $query->offset(($numofdata ) + $perpages )->limit($perpages)->get();
        //  $result = $request->input('results');
        // $results = new LengthAwarePaginator($result,count($numofdata),$numofdata);
         return [
             'data' => $result,
             'total' => $total,
             'page' => $page,
             'last_page' => ceil($total / $perPage)
         ];
    }
}
