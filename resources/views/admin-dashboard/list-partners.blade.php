@extends('admin-dashboard.admin-index')
@section('list-partners-section-content')
	    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Partners</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All partners</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  	<th>ID</th>
                  	<th>Name</th>
                  	<th>Phone Number</th>
                  	<th>Address</th>
                  	<th>Email</th>
                  	<th>Logo Image</th>
                  	<th>Website</th>
                  	<th>Delete Partner</th>
                </tr>
              </thead>
              @foreach($listpartner as $value)
              <tbody>
                <tr>
                  	<td>{!! $value["partID"] !!}</td>
                  	<td>{!! $value["name"] !!}</td>
                  	<td>{!! $value["phone_number"] !!}</td>
                  	<td>{!! $value["address"] !!}</td>
                  	<td>{!! $value["email"] !!}</td>
                    <td>
                  	<img src="{!! asset('data/images/images_partner/'.$value['logoImage']) !!}" width="100px;" alt="{!! $value["name"] !!}">
                    </td>
                  	<td>{!! $value["website"] !!}</td>
                  	<td>
                  		<a href="{!! url('delete',$value['partID']) !!}"><i class="fa fa-trash"></i>&nbsp;Delete
                  		</a>
					</td>
                </tr>
            	</tbody>
            	@endforeach
              <tfoot>
                <tr>
                  	<th>ID</th>
                  	<th>Name</th>
                  	<th>Phone Number</th>
                  	<th>Address</th>
                  	<th>Email</th>
                  	<th>Logo Image</th>
                  	<th>Website</th>
                  	<th>Delete Partner</th>
                </tr>
              </tfoot>
              
              
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
@endsection