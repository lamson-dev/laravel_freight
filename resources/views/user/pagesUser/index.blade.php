@extends('user.masterUser.masterUser')

@section('slide')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('dist-lib-api/leaflet.css')}}">
<script type="text/javascript" src="{{asset('dist-lib-api/leaflet.js')}}"></script>
<script type="text/javascript" src="{{asset('dist-lib-api/leaflet-routing-machine.js')}}"></script>
<link rel="stylesheet" href="{{asset('dist-lib-api/leaflet-routing-machine.css')}}" />
<div id="blogSlider">
    <div class="MS-content">
        <div class="item">
            <div class="imgTitle">
                <h2 class="blogTitle">House Transfer</h2>
                <img src="{!! url('.././public/user_style/images/demo/slide/houses.jpg') !!}" alt="" />
            </div>
            <p>Not everyone can move their own house because it will take a lot of time and effort. Moreover, you do not have
                modern equipment dedicated to transporting large quantities of furniture to where you need it...</p>
            <a href="#">Read More</a>
        </div>
        <div class="item">
            <div class="imgTitle">
                <h2 class="blogTitle">Moving Office</h2>
                <img src="{!! url('.././public/user_style/images/demo/slide/off.jpg') !!}" alt="" />
            </div>
            <p>For a company, when it is necessary to move offices to a new location, it will take a long time to arrange large-sized documents and items:
                tables, chairs, machines, ... and especially, if the company have rules ...</p>
            <a href="#">Read More</a>
        </div>
        <div class="item">
            <div class="imgTitle">
                <h2 class="blogTitle">Warehouse transfer</h2>
                <img src="{!! url('.././public/user_style/images/demo/slide/house.jpg') !!}" alt="" />
            </div>
            <p>You do not have to spend much time waiting, the professional counselor will quote quickly after catching some basic information.
                Especially with a staff of specialized electrical engineering, refrigeration, ...</p>
            <a href="#">Read More</a>
        </div>
        <div class="item">
            <div class="imgTitle">
                <h2 class="blogTitle">Quality Assurance</h2>
                <img src="{!! url('.././public/user_style/images/demo/slide/maylanh.jpg') !!}" alt="" />
            </div>
            <p>No need to worry about shipping losses, we have professional workers in the field of
                refrigeration, furniture and they are very customer friendly... Besides, the things that cover your goods are also fully guaranteed...</p>
            <a href="#">Read More</a>
        </div>

    </div>
    <div class="MS-controls">
        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
</div>
</div>

<!-- Include jQuery -->
<script src="{!! url('.././public/multislider/js/jquery-2.2.4.min.js')!!}"></script>

<!-- Include Multislider -->
<script src="{!! url('.././public/multislider/js/multislider.min.js')!!}"></script>

<!-- Initialize element with Multislider -->
<script>
$('#exampleSlider').multislider({
    interval: 4000,
    slideAll: true,
    duration: 1500
});</script>
<script>
    $('#exampleSlider1').multislider({interval: 2500});
    $('#exampleSlider2').multislider({
        interval: 3000,
        slideAll: true,
        duration: 1500
    });
    $('#exampleSlider3').multislider({
        continuous: true,
        duration: 4000
    });
    $('#logoSlider').multislider({
        continuous: true,
        duration: 2000
    });
    $('#blogSlider').multislider({
        duration: 750,
        interval: 3000
    });
    $('#reviewsSlider').multislider({
        slideAll: true,
        autoSlide: true,
        duration: 1000,
        interval: 4000
    });</script>
@endsection

@section('content')

<div class="content three_quarter">
    <div>
        <form style="text-align:center; padding-bottom: 10px; margin-top: 10px; margin-bottom:10px; -webkit-box-shadow: 0 0 3px 0 rgba(50,50,50,.5); -moz-box-shadow: 0 0 3px 0 rgba(50,50,50,.5);
              box-shadow: 0 0 3px 0 rgba(50,50,50,.5);" id='caculation_truck' name='caculation_truck' method='' action='#'>
            @csrf
            <p style="text-align: center; font-size:16px; font-weight:bold; color:#ffffff;
               margin-top:10px; padding:15px; background-color:#BE171E; font-family:tahoma;"> Calculation of reference freight rates</p>

            <p style="font-size:15px; color:#000000; margin-top:10px; font-weight:bold;">
            <div class="map-container">
                <br>
                <b>Address Lookup</b>
                <div id="search">
                    <input type="text" name="addr_start" value="" id="add_start" size="58" onkeypress="searchStartAddr(this.value);"  placeholder="starting address"/>
                    <input type="text" name="addr_end" value="" id="add_end" size="58" onkeypress="searchEndAddr(this.value)"  placeholder="ending address"/>
                    <button type="button" onclick="calculateDistanceStartEnd()">OK</button>
                    <div id="results" style="overflow-y: scroll; max-height: 320px;"></div>
                </div>


                <br />

                <style>
                    .address {
                        cursor:pointer
                    }
                    .address:hover {
                        color:#AA0000;
                        text-decoration:underline
                    }
                    #map{
                        height: 380px;
                        width: 570px;
                        /*position: absolute;*/
                    }
                </style>
                <div id="map"></div>

            </div>

            <input style='text-align:center; margin-left: 270px' type='text' name='kilomet' id='kilomet' size='30' maxlength='5' placeholder='Distance (kilomet)' readonly="true" />
            <p style="font-size:13px; color:#000000; margin-top:10px; font-style: italic;" >Note: 45km or more is counted as a long-distance                         vehicle</p>
            <p style="font-size:20px; color:#3ac551; margin-top:15px; font-weight:bold;">Select the type of payload</p>
            <p style="font-size:15px; color:#333333; font-weight:bold; margin: 0 0 10px;" >
            @foreach($TypeVehicle as $type)
            <div class="form-check">
                <label class="form-check-label">
                    <input style = 'margin-left: 270px;' type="radio" class="form-check-input" name="truck" value="{{$type['type_vehicleID']}}"> {{$type['type']}}
                </label>
            </div>
            @endforeach
            </p>
            <!--

            -->
            <button  type = "button" style='padding: 2px 15px 5px 15px;background: #b12d2d; color:#ffffff;  margin-left: 330px' onclick="calculateFee()">Calculate Fee</button>
        </form>
    </div>

    <div class="scrollable" id="tablefee">

    </div>
    <form  method="POST" action="{{route('book')}}" role="form" class="form-group">
        @csrf
        <div class="one_third first">
            <label for="name">Name  <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
        </div>
        <div class="one_third">
            <label for="phone">Phone number<span>*</span></label>
            <input type="text" name="phone" id="phone" value="" size="11" required>
        </div>
        <div class="one_third">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="" size="22">
        </div>
        <div class="one_third first">
            <label for="Starting">Starting point  <span>*</span></label>
            <input type="text" name="Starting" id="Starting" value="" size="22" required>
        </div>
        <div class="one_third">
            <label for="Ending">Ending point<span>*</span></label>
            <input type="text" name="ending" id="ending" value="" size="11" required>
        </div>
        <div class="one_third">
            <label for="Date">Date</label>
            <input type="date" name="Date" id="Date" value="" size="22">
        </div>
        <div class="one_third first">
            <label for="klmet">Number Kilomet <span>*</span></label>
            <input type="text" name="klmet" id="klmet" value="" size="22" readonly>
        </div>


        <div class="one_third">
            <label for="Gia Xe">Price</label>
            <input type="text" name="price" id="price" value="" size="22" readonly><span> $ </span>
        </div>
        <div class="block clear">
            <label for="note">Annotation on your product which needs transfer</label>
            <textarea name="note" id="note" style="width:100%" rows="10" required></textarea>
        </div>
        <div>
          <br>
          <center>
            <input class="btn btn-link" type="submit" name="submit" value="Book">
            <input type="reset" name="reset" value="Reset">
          </center>



        </div>

    </form>

    <!-- ################################################################################################ -->
</div>
</div>
<!-- ################################################################################################ -->
<!-- / main body -->
<div class="clear"></div>
</main>
</div>
<script>
    function calculateFee() {
        var distance = document.getElementById("kilomet").value;
        var truck = document.getElementsByName("truck");
        var startPoint = document.getElementById("add_start").value;
        var endPoint = document.getElementById("add_end").value;

        document.getElementById("Starting").value = startPoint;
        document.getElementById("ending").value = endPoint;
        document.getElementById("klmet").value = distance;

        var idtype = 0;
        for (var i = 0; i < truck.length; i++) {
            if (truck[i].checked === true) {
                var idtype = truck[i].value;
            }
        }
        if (truck <= 0)
        {
            error("không tồn tại xe này");
        } else {
            $.ajax({
                type: "GET",
                url: "{{route('user/calculate')}}",
                data: "Type=" + idtype + "& distance=" + distance,
                success: function (data) {
                    console.log(data);
                    $('#price').val(data.price);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    }

    function bookservice() {
        var starting = document.getElementsById("add_start").value;
        var ending = document.getElementsById("add_end").value;
        var distance = document.getElementById("kilomet").value;

        var truck = document.getElementsByName("truck");
        var idtype = 0;
        for (var i = 0; i < truck.length; i++) {
            if (truck[i].checked === true) {
                var idtype = truck[i].value;
            }
        }
        if (truck <= 0)
        {
            error("không tồn tại xe này");
        } else {
            $.ajax({
                type: "GET",
                url: "{{route('user/calculate')}}",
                data: "Type=" + idtype + "& distance=" + distance,
                success: function (data) {
                    console.log(data);
                    $('#tablefee').html(data);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    }


</script>
<script type="text/javascript" src="{{asset('dist-lib-api/customize-api.js')}}"></script>
@endsection
