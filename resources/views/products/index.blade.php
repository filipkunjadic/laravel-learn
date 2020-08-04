This is products page! :)

<h1>Product</h1>
@foreach($products as $product)
 <h4>{{ $product->name }}</h4>
 {{--
  EXAMPLE CODE
  @foreach($product->categories as $category)
   {{ $category->name }}
  @endforeach
 --}}
 <a href="{{ route('product.edit',$product->id) }}"> EDIT</a>
 <hr>
@endforeach
