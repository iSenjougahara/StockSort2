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

<div class="container mt-5">
<div class="row justify-content-end mb-3">
    <div class="col-md-6">
        <a href="/newProduto" class="btn btn-primary">New Product</a>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Job</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->name }}</td>
                <td>{{ $produto->setor }}</td>
                <td>{{ $produto->valor }}</td>
                <td><a href="{{ url('editProduto/' . $produto->id . '/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('deleteProduto/' . $produto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



{{ $produtos->links('pagination::bootstrap-4')->with([
    'size' => 'sm',
    'class' => 'pagination-sm'
]) }}


@if (session()->has('message'))

    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
    @endif



</div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2e
</body>
</html>
