<!DOCTYPE html>
<body style='background-color:rgb(0, 242, 255)'>
<html>
<head>
    <title>cart history</title>
</head>
<body>

<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss");

  </head>
  <body>
  <div class="container-scroller">

    @include("admin.navbar");

    <div class="container">
   <h1 align="center">Customer Orders</h1>
   <hr>

    <form action="{{url('/search')}}" method="get" align="center">
        <input type="text" name="search" style="color:rgb(0, 0, 250);">
        <input type="submit" value="Search" class="btn btn-success">

    </form>
    <br>



    <div>

        <hr>
    <table>
        <tr align="center">
          <th style="padding: 20px;">Name</th>
          <th style="padding: 20px;">Phone</th>
          <th style="padding: 20px;">House Address</th>
          <th style="padding: 20px;">Jersey Details</th>
          <th style="padding: 20px;">Price</th>
          <th style="padding: 20px;">Quantity</th>
          <th style="padding: 20px;">Total Price</th>
          <th style="padding: 30px;">Delivery Status</th>
        </tr>

        @foreach($data as $data)

        <tr align="center" style="background-color:black">
          <td style="padding-right: 20px;">{{$data->name}}</td>
          <td style="padding: 20px;">{{$data->phone}}</td>
          <td style="padding: 20px;">{{$data->address}}</td>
          <td style="padding: 20px;">{{$data->jerseyname}}</td>
          <td style="padding: 20px;">{{$data->price}}$</td>
          <td style="padding: 20px;">{{$data->quantity}}</td>
          <td style="padding: 20px;">{{$data->price * $data->quantity}}$</td>
          <td>{{$data->status}}</td>


        </tr>
        @endforeach

      </table>
      </div>
    </div>
    @include("admin.adminscript");

  </body>
</html>
