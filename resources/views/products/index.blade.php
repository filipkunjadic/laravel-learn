This is products page! :)

<h1>Product</h1>
@foreach($products as $product)
 <h4>{{ $product->name }}</h4>
 <a href="{{ route('product.edit',$product->id) }}"> EDIT</a>
 <hr>
@endforeach
