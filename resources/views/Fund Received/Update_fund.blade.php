@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Echobvel</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
	           <!-- Basic example -->
	           <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Update Fund Information</h3></div>
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
                            <form role="form" action="{{url('/update/'.$edit->Tr_No)}}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Type</label>
                                    <input type="text" class="form-control" name="fund_type" value="{{ $edit->fund_type }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">Source Type</label>
                                    <input type="text" class="form-control" name="source_type" value="{{ $edit->source_type }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{ $edit->description }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Description</label>
                                    <input type="text" class="form-control" name="user_id" value="{{ $edit->user_id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Description</label>
                                    <input type="text" class="form-control" name="date" value="{{ $edit->date }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Description</label>
                                    <input type="text" class="form-control" name="currency" value="{{ $edit->currency }}" required>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword21">Description</label>
                                    <input type="text" class="form-control" name="amount" value="{{ $edit->amount }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Description</label>
                                    <input type="text" class="form-control" name="status" value="{{ $edit->status }}" required>
                                </div>


                               
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>
@endsection