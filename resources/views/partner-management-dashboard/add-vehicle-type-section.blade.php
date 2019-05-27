@extends('partner-management-dashboard.partner-index')
@section('add-vehicle-type-section-content')
<div class="container mt-5">
    <div class="row tm-content-row">
        CRUD vehicle type
        <div class="form-control">
            <form  action="{{route('partnerInsertVehicleType')}}" method="POST">
                @CSRF
                <input  type="text" name="typeVehicle" value="" placeholder="input type of vehicle"/>
                <input class="form-control btn btn-primary" type="submit" value="addVehicleType" />
            </form>
        </div>

    </div>
</div>
@endsection
