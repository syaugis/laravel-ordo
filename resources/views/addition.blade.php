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
        <h1 class="text-center mb-4">Form Pertambahan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="/tambah" method="get">
                    <div class="d-flex justify-content-center">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="angka1" class="col-form-label">Angka 1</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="angka1" name="angka1"
                                    value="{{ old('angka1') }}">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="angka2" class="col-form-label">Angka 2</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="angka2" name="angka2"
                                    value="{{ old('angka2') }}">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="d-flex justify-content-center mb-4">
                <button type="submit" class="btn btn-primary ps-4 pe-4 p-2">Hitung</button>
            </div>
            </form>
        </div>
    </div>

    @if (isset($result))
        <div class="alert alert-success mt-4">
            <h2 class="text-center">Hasil: {{ $angka1 }} + {{ $angka2 }} = {{ $result }}</h2>
        </div>
    @endif
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
