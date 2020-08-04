<form method="POST" action="{{ isset($product) ? route('product.edit.action') : route('product.create.action') }}">
  @csrf
  <input type="text" name="name" value="{{ $product->name ?? '' }}"/>
  @if(isset($product))
    <input type="hidden" name="id" value="{{$product->id  }}"/>
  @endif
  <button type="submit">{{ isset($product) ? 'UPDATE' : 'CREATE'}}</button>
</form>
