@extends('user.masterUser.masterUser')

@section('slide')
  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="blogSlider">
        <div class="MS-content">
            <div class="item">
                <div class="imgTitle">
                    <h2 class="blogTitle">House Transfer</h2>
                    <img src="{{asset('user_style/images/demo/slide/houses.jpg')}}" alt="" />
                </div>
                <p>Not everyone can move their own house because it will take a lot of time and effort. Moreover, you do not have 
                  modern equipment dedicated to transporting large quantities of furniture to where you need it...</p>
                <a href="#">Read More</a>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <h2 class="blogTitle">Moving Office</h2>
                    <img src="{{asset('user_style/images/demo/slide/off.jpg')}}" alt="" />
                </div>
                <p>For a company, when it is necessary to move offices to a new location, it will take a long time to arrange large-sized documents and items: 
                  tables, chairs, machines, ... and especially, if the company have rules ...</p>
                <a href="#">Read More</a>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <h2 class="blogTitle">Warehouse transfer</h2>
                    <img src="{{asset('user_style/images/demo/slide/house.jpg') }}" alt="" />
                </div>
                <p>You do not have to spend much time waiting, the professional counselor will quote quickly after catching some basic information. 
                  Especially with a staff of specialized electrical engineering, refrigeration, ...</p>
                <a href="#">Read More</a>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <h2 class="blogTitle">Quality Assurance</h2>
                    <img src="{{asset('user_style/images/demo/slide/maylanh.jpg') }}" alt="" />
                </div>
                <p>No need to worry about shipping losses, we have professional workers in the field of 
                  refrigeration, furniture and they are very customer friendly... Besides, the things that cover your goods are also fully guaranteed...</p>
                <a href="#">Read More</a>
            </div>
            <!-- <div class="item">
                <div class="imgTitle">
                    <h2 class="blogTitle">Winter Driving</h2>
                    <img src="{!! ('../../public/user_style/images/demo/backgrounds/2.jpg') !!}" alt="" />
                </div>
                <p>Ice-road truckers are tough dudes! Selvage umami vexillologist shoreditch. Hell of hashtag hoodie affogato forage vegan yr. Gochujang ugh listicle...</p>
                <a href="#">Read More</a>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <h2 class="blogTitle">Beach Safety</h2>
                    <img src="{!! ('../../public/user_style/images/demo/backgrounds/1.jpg') !!}" alt="" />
                </div>
                <p>Jet skis are fun! Skateboard raw denim vexillologist tumblr hammock, knausgaard poke cray dreamcatcher mumblecore fashion axe cred shabby chic butcher actually. Shoreditch readymade...</p>
                <a href="#">Read More</a>
            </div> -->
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>

    <!-- Include jQuery -->
    <script src="{{asset('multislider/js/jquery-2.2.4.min.js')}}"></script>

    <!-- Include Multislider -->
    <script src="{{asset('multislider/js/multislider.min.js')}}"></script>

    <!-- Initialize element with Multislider -->
    <script>
    $('#exampleSlider').multislider({
        interval: 4000,
        slideAll: true,
        duration: 1500
    });
    </script>
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
		});
    </script>
@endsection

@section('content')
<div class="content three_quarter">
        <div>
        <form style="text-align:center; padding-bottom: 10px; margin-top: 10px; margin-bottom:10px; -webkit-box-shadow: 0 0 3px 0 rgba(50,50,50,.5); -moz-box-shadow: 0 0 3px 0 rgba(50,50,50,.5);
         box-shadow: 0 0 3px 0 rgba(50,50,50,.5);" id='caculation_truck' name='caculation_truck' method='post' action='#'>
      
          <p style="text-align: center; font-size:16px; font-weight:bold; color:#ffffff;
           margin-top:10px; padding:15px; background-color:#BE171E; font-family:tahoma;"> Calculation of reference freight rates</p>
          
          <p style="font-size:15px; color:#000000; margin-top:10px; font-weight:bold;">
          Please enter the number Kilomet need to transport:</p>
            <input style='text-align:center; margin-left: 270px' type='text' name='kilomet' id='kilomet' size='30' maxlength='5' placeholder='Số kilomet' />
            <p style="font-size:13px; color:#000000; margin-top:10px; font-style: italic;" >Note: 45km or more is counted as a long-distance vehicle</p>
            <p style="font-size:20px; color:#3ac551; margin-top:15px; font-weight:bold;">Select the type of payload</p>
            <p style="font-size:15px; color:#333333; font-weight:bold; margin: 0 0 10px;" >

            <input style = 'margin-left: 270px;' type="radio" name="truck" value="truck_500kg" />Truck 500Kg </input>
            <input style = 'margin-left: 270px;' type="radio" name="truck" value="truck_750kg" /> Truck 750Kg </input>
            <input style = 'margin-left: 270px;' type="radio" name="truck" value="truck_15t" /> Truck 1.5 Ton </input>
            <input style = 'margin-left: 270px;' type="radio" name="truck" value="truck_19t" /> Truck 1.9 Ton </input>
            <input style = 'margin-left: 270px;' type="radio" name="truck" value="truck_2t" /> Truck 2 Tons (Container of truck 6m) </input>
            
          </p>
          <input style='padding: 2px 15px 5px 15px;background: #b12d2d; color:#ffffff;  margin-left: 330px' type='submit' name='Submit' value='Calculate freight rates' 
          onclick=""/>
          <input style='text-align:center; margin-left: 270px; margin-top: 20px' type='text' name='total' id='total' size='30' maxlength='5' placeholder='15.000.000 VND' />
          </form> 
           </div>
          
           <h1 style='margin-top: 20px'> 1. Freight rates for renting trucks and moving houses and offices</h1>
          <div class="scrollable">
              <table border="1" style="width:100%">
                  <tbody>
                    <tr>
                      <th style="text-align:center"><span style="color:#ffffff; font-family:tahoma,geneva,sans-serif"><span style="font-size:14px">Type of Vehicle</span></span></th>
                      <th style="text-align:center"><span style="color:#ffffff"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Gi&aacute; Open the door - the first 10km</span></span></span></th>
                      <th style="text-align:center"><span style="color:#ffffff"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">From 11th to 44th kilometers</span></span></span></th>
                      <th style="text-align:center"><span style="color:#ffffff"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">From the 45th kilometer</span></span></span></th>
                      <th style="text-align:center"><span style="color:#ffffff; font-family:tahoma,geneva,sans-serif"><span style="font-size:14px">Waiting time</span></span></th>
                    </tr>
                    <tr>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Truck 500kg</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">250.000 VNĐ</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">13.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">12.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">70.000 VNĐ/Hour</span></span></td>
                    </tr>
                    <tr>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Truck 750kg</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">300.000 VNĐ</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">14.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">13.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">70.000 VNĐ/Hour</span></span></td>
                    </tr>
                    <tr>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Truck 1.5 Ton</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">400.000 VNĐ</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">15.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">14.000VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">100.000 VNĐ/Hour</span></span></td>
                    </tr>
                    <tr>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Truck 1.9 Ton</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">500.000 VNĐ</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">20.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">17.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">120.000 VNĐ/Hour</span></span></td>
                    </tr>
                    <tr>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Truck 2 tons (Container of truck 6m)</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">700.000 VNĐ</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">30.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">19.000 VNĐ/Km</span></span></td>
                      <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">200.000 VNĐ/Hour</span></span></td>
                    </tr>
                  </tbody>
                </table>
                
                <h1 style='margin-top: 20px'> 2. Loading and unloading charges</h1>
                
                <table border="1" style="width:100%">
                  <tbody>
                    <tr>
                      <th style="text-align:center"><span style="color:#ffffff">Type of Vehicle</span></th>
                      <th style="text-align:center"><span style="color:#ffffff">Loading and unloading fees twice</span></th>
                    </tr>
                    <tr>
                      <td style="text-align:center">Truck 500KG</td>
                      <td style="text-align:center">200.000 VNĐ/Truck</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">Truck 750KG</td>
                      <td style="text-align:center">200.000 VNĐ/Truck</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">Truck 1.5 Ton</td>
                      <td style="text-align:center">400.000 VNĐ/Truck</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">Truck 1.9 Ton</td>
                      <td style="text-align:center">600.000 VNĐ/Truck</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">Truck 2 Tons (Container of truck 6m)</td>
                      <td style="text-align:center">800.000 VNĐ/ Truck</td>
                    </tr>
                  </tbody>
                </table>
                
                <h1 style='margin-top: 20px'> 3. Other transfer costs (if any)</h1>
                
                <table border="1" style="width:100%">
                  <tbody>
                    <tr>
                      <th colspan="2" style="text-align:center"><span style="font-size:16px"><span style="color:#ffffff"><strong>Other transfer costs (if any)</strong></span></span></th>
                    </tr>
                    <tr>
                      <td style="text-align:center; width:50%">Carton (60x40x35 cm)</td>
                      <td style="text-align:center">18.000 VNĐ/Carton</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">PE film lined with furniture</td>
                      <td style="text-align:center">Free</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">Remove air conditioner assembly</td>
                      <td style="text-align:center">Remove: 50,000 VND   Collecting: 100,000 VND</td>
                    </tr>
                    <tr>
                      <td style="text-align:center">Remove and install furniture</td>
                      <td style="text-align:center">Depending on furniture and quantity</td>
                    </tr>
                    
                  </tbody>
                </table>
          </div>
          <div id="comments">
            <!-- <h2>Comments</h2>
            <ul>
              <li>
                <article>
                  <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <address>
                    By <a href="#">A Name</a>
                    </address>
                    <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                  </header>
                  <div class="comcont">
                    <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                  </div>
                </article>
              </li>
              <li>
                <article>
                  <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <address>
                    By <a href="#">A Name</a>
                    </address>
                    <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                  </header>
                  <div class="comcont">
                    <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                  </div>
                </article>
              </li>
              <li>
                <article>
                  <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <address>
                    By <a href="#">A Name</a>
                    </address>
                    <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                  </header>
                  <div class="comcont">
                    <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                  </div>
                </article>
              </li>
            </ul>
            <h2>Write A Comment</h2> -->
            <h1 style='margin-top: 20px'> 4. Book Service Now</h1>
            <form action="#" method="post">
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
                  <label for="klmet">Number Kilomet <span>*</span></label>
                  <input type="text" name="klmet" id="klmet" value="" size="22" required>
                </div>
                <div class="one_third">
                  <label for="LoaiXe">Type of Vehicle <span>*</span></label>
                  <select name="LoaiXe" id="LoaiXe">
                      <option value="truck-500kg">Truck 500Kg</option>
                      <option value="truck-750kg">Truck 750Kg</option>
                      <option value="truck-1500kg">Truck 1.5 Ton</option>
                      <option value="truck-1900kg">Truck 1.9 Ton</option>
                      <option value="truck-2000kg">Truck 2 Ton ( Container of truck 6m )  </option>
                    </select>
                </div>
                <div class="one_third">
                  <label for="Gia Xe">Price</label>
                  <input type="text" name="price" id="price" value="" size="22" readonly>
                </div>
              <div class="block clear">
                <label for="note">Annotation on your product which needs transfer</label>
                <textarea name="note" id="note" cols="25" rows="10"></textarea>
              </div>
              <div>
                <input type="submit" name="submit" value="Book">
                &nbsp;
                <input type="reset" name="reset" value="Reset">
              </div>
            </form>
          </div>
      <!-- ################################################################################################ -->
    </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection
