@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
	           <!-- Basic example -->
	           <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading "><h3 class="panel-title text-black">Single Vew Fund</h3></div>
                        <div class="panel-body">
                           
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Type:</label>
                                   <p>{{ $singleFund->fund_type}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">Source Type:</label>
                                   <p>{{ $singleFund->source_type}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Description:</label>
                                    <p>{{ $singleFund->description}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword19">Currency:</label>
                                    <p>{{ $singleFund->currency}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword18">Amount</label>
                                   <p>{{ $singleFund->amount}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword17">Status</label>
                                    <p>{{ $singleFund->status}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword17">Date</label>
                                    <p>{{ $singleFund->date}}</p>
                                </div>                                                                                      
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>


@endsection