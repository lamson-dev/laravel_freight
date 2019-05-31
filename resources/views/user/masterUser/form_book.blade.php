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