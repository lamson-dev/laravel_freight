@extends('Vehicle.partner-index')
@section('add-vehicle-section-content')
<div class="container tm-mt-big tm-mb-big">
    <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Add Vehicle</h2>
                    </div>
                </div>
                <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <form action="{{Route('postaddVehicel')}}" class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                            @CSRF
                  
                            <div class="form-group mb-3">
                            <label for="name">Vehicle Brand</label>
                            <input id="name" name="vehicle_brand" type="text" class="form-control validate" required/>
                             </div>
                            <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control validate" rows="3" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                            <label for="category">Type vehicle</label>
                            <select class="custom-select tm-select-accounts" id="category" name="typeVehicle">

                            @foreach($vehicle_type as $vehi_type)
                            <option value="{{$vehi_type->type_vehicleID}}">{{$vehi_type->type}}</option>
                            @endforeach
                            </select>
                            <!--temp-->
                            <label for="category">Partner</label>
                            <select class="custom-select tm-select-accounts" id="category" name="Partner">

                            @foreach($partner as $vehi_type)
                            <option value="{{$vehi_type->partID}}">{{$vehi_type->name}}</option>
                            @endforeach
                            </select>
                            </div>
                            <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input id="price" name="price" type="text" class="form-control validate" required/>
                            </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                            <i
                            class="fas fa-cloud-upload-alt tm-upload-icon"
                            onclick="document.getElementById('fileInput').click();"
                            ></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                            <input id="fileInput" name = "fileInput" type="file" style="display:none;" />
                            <input
                            type="button"
                            class="btn btn-primary btn-block mx-auto"
                            value="UPLOAD PRODUCT IMAGE"
                            onclick="document.getElementById('fileInput').click();"
                            />
                            </div>
                            </div>
                            <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
                            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $("#expire_date").datepicker();
    });
</script>
@endsection
