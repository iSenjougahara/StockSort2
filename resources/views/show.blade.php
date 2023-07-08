<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">User Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Welcome, {{ Auth::user()->name }} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout </a>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('editUser/' . Auth::user()->id . '/edit') }}">Edit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products">Check Products</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Filter Lotes</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('show2') }}">
                        <div class="form-group row">
                            <label for="produto_id" class="col-md-4 col-form-label text-md-right">Product:</label>
                            <div class="col-md-6">
                                <select id="produto_id" name="produto_id" class="form-control">
                                    <option value="">All</option>
                                    @foreach($produtos as $produto)
                                        <option value="{{ $produto->id }}" {{ request('produto_id') == $produto->id ? 'selected' : '' }}>
                                            {{ $produto->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Lote ID</th>
                                <th>Product</th>
                                <th>Movimentos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($lotes as $lote)
                                <tr>
                                    <td>{{ $lote->id }}</td>
                                    <td>{{ $lote->product->name }}</td>
                                    <td>{{ $lote->movimentos->count() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Lotes found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $lotes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@if (isset($message))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endif
</div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2e
</body>
</html>
