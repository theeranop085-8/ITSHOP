@extends('layouts.myapp')
@section('content')
<div class="row">

</div class="col-12"> 
<div class="card">
   <div class="card-header">
   <h1>เกี่ยวับร้าน IT shop</h1>
   </div>
   <div class="card-body">

   <u1>
       <li>ที่อยู่1: {{$address}}</li>
       <li>เบอร์โทร:{{$mobilephone}}</li>
       <li>ที่ตั้งร้าน:{{$location}}</li>
   </u1>


</div>
</div>
@endsection