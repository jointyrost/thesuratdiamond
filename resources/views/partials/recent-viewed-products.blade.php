<li>
    <div class="thumbnail">
        <a href="{{ url('product-details/' . $product->id) }}">
            <img src="{{asset('storage/'.$product->images->first()->image_path)}}" alt="Blog Images">
        </a>
    </div>
    <div class="content">
        <h6 class="title"><a href="{{ url('product-details/' . $product->id) }}">{{$product->name}}</a></h6>
        <div class="product-meta-content">
            <span class="woocommerce-Price-amount amount">
            ${{$product->price}}
        </span>
        </div>
    </div>
</li>