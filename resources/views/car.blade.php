<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertambahan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-center mb-4">List of Cars</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Manufacture Address</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $car)
                            <tr>
                                <td> {{ $car->name }} </td>
                                <td> {{ $car->manufacture->address ?? 'No address available' }} </td>
                                <td> {{ $car->type }} </td>
                                <td> {{ number_format($car->price / 100, 0, ',', '.') }} </td>
                                <td> {{ $car->date_of_manufacture }} </td>
                                <td>
                                    @if ($car->reviews->isNotEmpty())
                                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#reviews-{{ $car->id }}" aria-expanded="false"
                                            aria-controls="reviews-{{ $car->id }}">
                                            Show Reviews
                                        </button>
                                    @else
                                        <span class="text-muted">No reviews</span>
                                    @endif
                                </td>
                            </tr>
                            @if ($car->reviews->isNotEmpty())
                                <tr class="collapse" id="reviews-{{ $car->id }}">
                                    <td colspan="6">
                                        <ul class="list-group">
                                            @foreach ($car->reviews as $review)
                                                <li class="list-group-item">
                                                    <strong>{{ $review->name }}</strong>
                                                    <span class="text-warning">
                                                        @for ($i = 1; $i <= $review->rating; $i++)
                                                            ★
                                                        @endfor
                                                        @for ($i = $review->rating + 1; $i <= 10; $i++)
                                                            ☆
                                                        @endfor
                                                    </span>
                                                    <p>{{ $review->text }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No cars available.</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mt-5 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg width="30" height="24"></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© {{ now()->format('Y') }} Muhammad Syaugi Shahab</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
