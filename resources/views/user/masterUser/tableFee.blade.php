
   <h1 style='margin-top: 20px'> 1. Table of price for truck {{$Type}} with distance {{$distance}} Km</h1>
            <table border="1" style="width:100%">
              <tbody>
                <tr>
                  <th style="text-align:center"><span style="color:#ffffff; font-family:tahoma,geneva,sans-serif"><span style="font-size:14px">Branch</span></span></th>
                  <th style="text-align:center"><span style="color:#ffffff"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Gi&aacute; Description</span></span></span></th>
                  <th style="text-align:center"><span style="color:#ffffff"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">price/km</span></span></span></th>
                  <th style="text-align:center"><span style="color:#ffffff"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Total</span></span></span></th>
                  <th style="text-align:center"><span style="color:#ffffff; font-family:tahoma,geneva,sans-serif"><span style="font-size:14px">Options</span></span></th>
                </tr>
                @foreach($Vehicle as $vehicle)
                <tr>
                  <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">{{$vehicle->brand }}</span></span></td>
                  <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">{{$vehicle->description}}</span></span></td>
                  <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">{{$vehicle->price}} vnd</span></span></td>
                  <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">{{$vehicle->price * $distance}} vnd</span></span></td>
                  <td style="text-align:center"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">
                  <a href="{{ route('show',['vehicle'=>$vehicle->vehicleID, 'distance'=>$distance])}}">Detail</a><br>
                  
                  </span></span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
<!--              <h1 style='margin-top: 20px'> 2. Loading and unloading charges</h1>
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
                        <th colspan="2" style="text-align:center"><span style="font-size:16px"><span style="color:#ffffff"><strong>Other transfer costs (if any)
                        </strong></span></span>
                        </th>
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
                </table>-->




