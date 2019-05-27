@extends('admin-dashboard.admin-index')
@section('managing-partners-section-content')
<!-- <div class="content-wrapper"> -->
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Partner</li>
      </ol>
      
      <!-- Display error -->

        <!-- //Display error -->
        <form action="{{route('adminAddPartner')}}" method="POST" enctype="multipart/form-data">
        	@CSRF
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Partner ID: </label>
                <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Warning: Do not input data" name="id">
              </div>
              <div class="col-md-6">
                <label>Partner Name: </label>
                <input class="form-control"  type="text" aria-describedby="nameHelp" placeholder="Enter partner name" name="txtName">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Phone Number: </label>
                <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Enter phone number" name="txtPhone">
              </div>
              <div class="col-md-6">
                <label>Address: </label>
                <input class="form-control"  type="text" aria-describedby="nameHelp" placeholder="Enter address" name="txtAddress">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="txtEmail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Logo Image</label>
                <input class="form-control" type="file" placeholder="" name="txtLogo">
              </div>
              <div class="col-md-6">
                <label>website</label>
                <input class="form-control" type="text" placeholder="" name="txtWebsite">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Add Partner</button> <!-- onclick="addPartner()" -->
          
        </form>

        <script>
        	function addPartner(){
        		alert('Add Partner successfully')
        	}
        </script>
 </div>
<!--  </div> -->
@endsection


