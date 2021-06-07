<div class="product_card col-lg-3 p-2 ml-2">
    <a href="{{route('product', $product->id)}}">
        <img class="product_card_img" src="{{asset('/images/products/'.$product->photo)}}" alt="">
    </a>
    <p class="text-center m-0"><a href="{{route('category', $product->category->id)}}" class="product_card_category">{{$product->category->name}}</a></p>
    <p class="text-center m-0 px-3"><a href="{{route('product', $product->id)}}" class="product_card_title">{{$product['title']}}</a></p>
    <div class="mt-auto"></div>
    <div class="px-3 d-flex justify-content-between ">
        <p class="m-0">{{number_format($product->price)}} ₽</p>
    </div>
</div>
