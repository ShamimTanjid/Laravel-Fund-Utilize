<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FundReceivedController extends Controller
{
    public function INdex(){
    	return view('Fund Received.index');
    }
 public function StoreFund(Request $request){
 	$validatedData = $request->validate([
        'fund_type' => 'required',
        'source_type' => 'required',
        'description' => 'required',
        'currency' => 'required',
        'amount' => 'required',       
        ]);

 	    $data=array();
    	$data['user_id']=$request->user_id;
    	$data['date']=$request->date;
    	$data['fund_type']=$request->fund_type;
    	$data['source_type']=$request->source_type;
    	$data['description']=$request->description;
    	$data['currency']=$request->currency;
    	$data['amount']=$request->amount;
    	$data['status']=$request->status; 
    	$FundData=DB::table('fundreceiveds')
                         ->insert($data); 	
        //return Redirect()->route('home') 
         return redirect('allfund');                
 }


 public function ShowFund()
    { 	
    	$allfund=DB::table('fundreceiveds')
                         ->get(); 
    	//$allfund=fundreceiveds::all();
    	return view('Fund Received.AllFund', compact('allfund'));
    }
    public function SingleView($Tr_No){
    	$singleFund=DB::table('fundreceiveds')
                ->where('Tr_No',$Tr_No)
                ->first();
    	return view('Fund Received.single_fund_view', compact('singleFund'));
    }

     public function EidtFund($Tr_No)
    {
        $edit=DB::table('fundreceiveds')
             ->where('Tr_No',$Tr_No)
             ->first();
        return view('Fund Received.Update_fund', compact('edit'));     
    }

    public function UpdateFund(Request $request,$Tr_No){
    	$data=array();
    	$data['user_id']=$request->user_id;
    	$data['date']=$request->date;
    	$data['fund_type']=$request->fund_type;
    	$data['source_type']=$request->source_type;
    	$data['description']=$request->description;
    	$data['currency']=$request->currency;
    	$data['amount']=$request->amount;
    	$data['status']=$request->status; 
    	$update=DB::table('fundreceiveds')->where('Tr_No',$Tr_No)->update($data); 	

    }
    public function DeleteFund($Tr_No)
    {
         $delete=DB::table('fundreceiveds')
                ->where('Tr_No',$Tr_No)
                ->delete();
            }
}
