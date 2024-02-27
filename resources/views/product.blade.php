<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- แทรก Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Product List</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><strong>Code:</strong> {{ $product->products_code }}</p>
                            <p class="card-text">{{ Str::limit($product->details, 100) }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ number_format($product->price) }} THB</p>
                            <p class="card-text"><strong>Remaining:</strong> {{ $product->remaining }} pcs</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- แทรก Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
