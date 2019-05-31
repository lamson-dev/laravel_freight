@extends('Vehicle.partner-index')
@section('vehicle-section-content')
<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                            <tr>
                                <th scope="col">Vehicle No.</th>
                                <th scope="col">Type</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Price/km</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($vehicle as $vehi)
                            <tr>
                                <td class="tm-product-name">{{$vehi->vehicleID}}</td>
                                <td>{{$vehi->type_vehicleID}}</td>
                                <td>{{$vehi->brand}}</td>
                                <td>{{$vehi->price}}</td>
                                <td>{{$vehi->description}}</td>
                                <td><img src="../../public/user_style/images/demo/img/{{$vehi->image}}" style="width:150px; height:120px" alt=""></td>
                                <td>
                                <a href="{{ route('getupdate',$vehi->vehicleID)}}" class="tm-product-update-link">
                                <i class="far fa-edit tm-product-edit-icon"></i>
                                </a>
                                </td>
                                <td>
                                    <a href="{{route('getdelete',$vehi->vehicleID)}}" class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                    </a>
                                </td>
                            </tr>
                          @endforeach  
                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <a href="{{route('postaddVehicel')}}" class="btn btn-primary btn-block text-uppercase mb-3">
                    Add new product
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title">Product Categories</h2>
                <div class="tm-product-table-container">
                    <table class="table tm-table-small tm-product-table">
                    <thead>
                            <tr>
                                <th scope="col">Vehicle No.</th>
                                <th scope="col">Type Name</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($vehicle_type as $type)
                            <tr>
                            <td class="tm-product-name">{{ $type->type_vehicleID}}</td>
                            <td class="tm-product-name">{{ $type->type}}</td>
                            <td class="text-center"> 
                            <a href="#" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                            </a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <!--        <button class="">
                          
                        </button>-->
                <a href="#" class="btn btn-primary btn-block text-uppercase mb-3">Add new category</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('product-script')
<script>
    $(function () {
        $(".tm-product-name").on("click", function () {
            window.location.href = "edit-product.html";
        });
    });
</script>
@endsection
