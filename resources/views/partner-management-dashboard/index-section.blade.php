@extends('partner-management-dashboard.partner-index')
@section('index-section-content')
<div class="container">
    <!--    <div class="row">
            <div class="col">
                <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
            </div>
        </div>
         row 
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block">
                    <h2 class="tm-block-title">Latest Hits</h2>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block">
                    <h2 class="tm-block-title">Performance</h2>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller">
                    <h2 class="tm-block-title">Storage Information</h2>
                    <div id="pieChartContainer">
                        <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                    <h2 class="tm-block-title">Notification List</h2>
                    <div class="tm-notification-items">
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Jessica</b> and <b>6 others</b> sent you new <a href="#"
                                        class="tm-notification-link">product updates</a>. Check new orders.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Oliver Too</b> and <b>6 others</b> sent you existing <a href="#"
                                        class="tm-notification-link">product updates</a>. Read more reports.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Victoria</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">order updates</a>. Read order information.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Laura Cute</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">product records</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Samantha</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">order stuffs</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Sophie</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">product updates</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Lily A</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">product updates</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Amara</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">product updates</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-2"><b>Cinthela</b> and <b>6 others</b> sent you <a href="#"
                                        class="tm-notification-link">product updates</a>.</p>
                                <span class="tm-small tm-text-color-secondary">6h ago.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
    <div class="row">
        <div class="col-5 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Orders List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Book NO.</th>
                            <th scope="col">Date</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
    <!--                            <th scope="col">LOCATION</th>
                            <th scope="col">DISTANCE</th>
                            <th scope="col">START DATE</th>
                            <th scope="col">EST DELIVERY DUE</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bill as $bil)
                 
                        <tr>
                            <th scope="row"><b>{{$bil->billID}}</b></th>
                            <td>
                                <div class="tm-status-circle moving">
                                </div>{{$bil->date}}
                            </td>
                            <td><b>{{$bil->status}}</b></td>
                            <td><b>{{$bil->note}}</b></td>
                        </tr>
                 
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-7 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Detail Booking</h2>
                <form action="" class="tm-signup-form row">
                    <div class="form-group col-lg-6">
                        <label for="name">Customer Name</label>
                        <input
                            id="cus-name"
                            name="name"
                            type="text"
                            class="form-control validate" readonly=""
                            />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email/Phone:</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="form-control validate" readonly=""
                            />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">Address:</label>
                        <input
                            id="address"
                            name="address"
                            type="text"
                            class="form-control validate" readonly=""
                            />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">Distance:</label>
                        <input
                            id="distance"
                            name="distance"
                            type="text"
                            class="form-control validate" readonly=""
                            />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">Start Place:</label>
                        <input
                            id="start"
                            name="start"
                            type="text"
                            class="form-control validate" readonly=""
                            />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">End Place:</label>
                        <input
                            id="end"
                            name="end"
                            type="text"
                            class="form-control validate" readonly=""
                            />
                    </div>

                    <div class="form-control" style="">
                        <label for="address">Price:</label>
                        <input
                            id="price"
                            name="price"
                            type="text"
                            class="validate" readonly=""
                            />
                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary btn-block text-uppercase"
                        >
                        Confirm Booking
                    </button>
            </div>
            </form>
        </div>  
    </div>
</div>


</div>
@endsection

@section('index-script')
<script>
    function getMessage() {
        alert();
//            $.ajax({
//               type:'POST',
//               url:'/getmsg',
//               data:'_token = <?php echo csrf_token() ?>',
//               success:function(data) {
//                  $("#msg").html(data.msg);
//               }
//            });
    }

    Chart.defaults.global.defaultFontColor = 'white';
    let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
    barChart, pieChart;
    // DOM is ready
    $(function () {
        drawLineChart(); // Line Chart
        drawBarChart(); // Bar Chart
        drawPieChart(); // Pie Chart

        $(window).resize(function () {
            updateLineChart();
            updateBarChart();
        });
    })
</script>
@endsection
