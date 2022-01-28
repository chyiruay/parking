@extends('layoutproduct')
@section('content')
<div class="row">
    <div>
        <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/14/14460/f227e9266820f76aef08bd8df74e5d61.jpg"
        style="width:1278px; height:450px;">
        <div style="margin-top:-350px; margin-left:275px; font-size:70px; color:white; margin-bottom:20px;"><strong>Looking for a parking?</strong></div>
        <div class="category" style="margin-bottom:200px;">
            <a href="{{route('viewDetail',1)}}"><button style="margin-left:340px;"><strong>HOTEL</strong></button></a>
            <a href="{{route('viewDetail',2)}}"><button style="margin-left:10px;"><strong>MALL</strong></button</a>
        </div>
    </div>
    @foreach($products as $product)
    <div class="col-sm-4">
        <div class="card-body">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <a class="order" href="{{route('Order',['id'=>$product->id])}}"><img src="{{ asset('images/') }}/{{$product->image}}" class="img-fluid" alt="" width="80%"></a>
            <h4 class="card-title" style="color:white;">{{$product->name}}</h4>
        </div>
    </div>
    @endforeach
</div>
    
@endsection