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

        <h1 class="text-center mb-4">List of Manufactures</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Car Name</th>
                            <th scope="col">Date of Manufacture</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($manufactures as $manufacture)
                            <tr>
                                <td> {{ $manufacture->name }} </td>
                                <td> {{ $manufacture->address }} </td>
                                <td> {{ $manufacture->car->name }} </td>
                                <td> {{ $manufacture->car->date_of_manufacture }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No Manufactures available.</td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-uCoH0tEcDDcUpgfDOO5S9fLRs4Z2m2ZEGnlzzpGhr78NHDnvzA4pTw18+LLK+mUqVRqsHQ4Wdf5xl5kNDbkfdQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
