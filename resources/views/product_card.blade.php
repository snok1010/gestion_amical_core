<div class="card" style="width: 300px; margin: 20px">
	<img class="card-img-top img-fluid" src="{{$product->product_path_img}}" alt="Card image cap">
	<div class="card-block">
		<h4 class="card-title"  style="margin-left: 5px">{{$product->product_name}}</h4>
		<p class="card-text" style="margin-left: 5px">Prix: {{$product->product_price}}</p>
		<p class="card-text" style="margin-left: 5px">Stocks: {{$product->product_stocks}}</p>
		<p class="card-text" style="margin-left: 5px">Date de peremption: {{$product->product_expiry_date}}</p>
	</div>
</div>