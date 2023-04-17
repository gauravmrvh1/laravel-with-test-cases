<h1>Product Index Page</h1>

@forelse($products as $key => $value)
    <h2>{{ $value->name }}</h2>
    @auth
        <button>Buy Product</button>

    @endauth
    @empty
    <h2>No Products</h2>
@endforelse
<br><br><br><br>
<a href="{{ route('product.create') }}">Create Product</a>
<a href="{{ route('product.store') }}">Store Product</a>

