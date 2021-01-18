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
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add Fund </h3></div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="panel-body">
                            <form role="form" action="{{ url('/insert') }}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Date"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">Fund Type</label>
                                    <select name="fund_type" class="form-control" id="exampleFormControlSelect1">
                                                <option value="1">Please Select</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Group">Group</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Source Type</label>
                                     <select name="source_type" class="form-control" id="exampleFormControlSelect1">
                                                <option value="1">Please Select</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Insurance">Insurance</option>
                                                <option value="Interest">Interest</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">User Name</label>
                                    @php
                                    $user=DB::table('users')->get();
                                    @endphp
                                    <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                                         @foreach($user as $row)
                                         <option value="">Please Select</option>
                                     <option value="{{$row->id }}">{{$row->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword19">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword18">Currency</label>
                                    <input type="text" class="form-control" name="currency" placeholder="Currency"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword17">Amount</label>
                                    <input type="text" class="form-control" name="amount" placeholder="Amount"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword41">Status</label>
                                    <input type="text" class="form-control" name="status" placeholder="Status"required>
                                </div>                             
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>



@endsection
