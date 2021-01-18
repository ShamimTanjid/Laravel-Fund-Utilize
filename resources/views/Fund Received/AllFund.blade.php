@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">                  
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
	          <div class="col-md-12">
	              <div class="panel panel-default">
	                  <div class="panel-heading">
	                      <h3 class="panel-title">All Fund</h3>
	                  </div>
	                  <div class="panel-body">
	                      <div class="row">
	                          <div class="col-md-12 col-sm-12 col-xs-12">
	                              <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                          <th>Fund Type</th>
	                                          <th>Source Type</th>
	                                          <th>Description</th>                                
                                              <th>Currency</th>
	                                          <th>Date</th>
	                                          <th>Amount</th>
	                                          <th>Status</th>                       
	                                          <th>Action</th>
	                                      </tr>
	                                  </thead>

	                           
	                                  <tbody>
	                                  	@foreach($allfund as $row)
	                                      <tr>
	                                          <td>{{ $row->fund_type }}</td>
	                                          <td>{{ $row->source_type }}</td>
	                                          <td>{{ $row->description }}</td>                     
	                                          <td>{{ $row->currency}}</td>
	                                          <td>{{ $row->date}}</td>
	                                          <td>{{ $row->amount}}</td>
	                                          <td>{{ $row->status}}</td>
	                                         <td>
	                                         	<a href="{{url('/view/'.$row->Tr_No)}}" class="btn btn-sm btn-primary">View</a>
	                                         	<a href="{{url('/edit/'.$row->Tr_No)}}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{url('/delete/'.$row->Tr_No)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>                                    
	                                         </td>
	                                      </tr>
	                                    @endforeach
	                                  </tbody>
	                              </table>

	                          </div>
	                      </div>
	                  </div>
	              </div>
	          </div>
            </div>
        </div> <!-- container -->            
    </div> <!-- content -->
</div>


@endsection