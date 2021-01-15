<div class="card" style="width: 10rem; margin-right: 5px">
  {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
  <div class="card-body">
    <h5 class="card-title">{{$product->product_name}}</h5>
  </div>
  <div class="card-body">
    <p>Prix : {{$product->product_price}}</p>
    <p>Stock : {{$product->product_stocks}}</p>
    <p>Date de peremption : {{$product->product_expiry_date}}
  </div>
</div>