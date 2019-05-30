@extends('user.masterUser.masterUser')
@section('slide')
@endsection
@section('content')

<div class="content three_quarter">
       
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a href="#" >
            @foreach($vehicle_img as $vehicle_img) 
            <img Style="height: 350px; width: 675px" src="{!! url('.././public/user_style/images/demo/img/'.$vehicle_img->image) !!}" alt="">
            <p><img Style="height: 120px; width: 220px" src="{!! url('.././public/user_style/images/demo/img/1.jpg')!!}" alt="">
            <img Style="height: 120px; width: 220px" src="{!! url('.././public/user_style/images/demo/img/3.jpg') !!}" alt="">
            <img Style="height: 120px; width: 220px" src="{!! url('.././public/user_style/images/demo/img/4.jpg') !!}" alt="">
            </p>
            @endforeach
            </a>
            <br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <br>
            @foreach($vehicle as $vehicle)
            <span style="font-size:15px">
            Hãng xe TOYOTA, Độ giảm sốc cao chạy êm, nhạ nhàng, đảm bảo an toàn tuyệt đối cho các sản phẩm dễ vỡ
            như tủ kính, bàn ghế kính, cữa kính, và các sản phẩm dễ trầy sước như tủ thờ, giường, sofa, đèn phale...
            </span><br>
            <span style="font-size:15px">Chế độ: Trong thời gian này hãng xe đang có chương trình miễn phí bốc xếp đồ đạc và các vật phẩm dùng để đựng đồ cũng được miễn phí <a href="#"><span style="color: red">30%</span></a>
            </span> <br>
            <span style="font-size:15px">Với số kilomets mà bạn đã chọn là <span style="color: red">{{$distance}} </span>Km, chúng tôi đã tính được giá tiền là <span style="color: red">{{$distance * $vehicle->price}} vnd. </span> </span>
            <br><span style="font-size:15px">Chúng tôi sẽ mang đến cho bạn một cuộc sống mới tiện nghi và thoải mái hơn. <span style="font-size:15px">Hãy tin tưởng chúng tôi !</span></span>
            <br><br><span style="font-size:17px">Đặt ngay <span style="color: red">{{$vehicle->description}}</span></span>
        </div>
          <div class="scrollable" id="tablefee">

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
            
            <form  method="POST" action="{{route('book')}}" role="form">
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
                  <input type="text" name="klmet" id="klmet" value="{{$distance}}" size="22" readonly>
                </div>
               
                <div class="one_third">
                  <label for="LoaiXe">Type of Vehicle <span>*</span></label>
                  <select name="LoaiXe" id="LoaiXe"> <span>*</span>
                  @foreach($TypeVehicle as $type)
                  @if($type['type_vehicleID'] == $vehicle->type_vehicleID)
                      <option value="{{$type['type_vehicleID']}}" selected>{{$type['type']}}</option>
                    @else
                    <option value="{{$type['type_vehicleID']}}" >{{$type['type']}}</option>
                    @endif
                  @endforeach
                    </select>
                </div>
                
                <div class="one_third">
                  <label for="Gia Xe">Price</label>
                  <input type="text" name="price" id="price" value="{{$vehicle->price * $distance}}" size="22" readonly>
                </div>
              <div class="block clear">
                <label for="note">Annotation on your product which needs transfer</label>
                <textarea name="note" id="note" cols="25" rows="10" required></textarea>
              </div>
              <div>
                <input type="submit" name="submit" value="Book">
                &nbsp;
                <input type="reset" name="reset" value="Reset">
              </div>
              @endforeach
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


