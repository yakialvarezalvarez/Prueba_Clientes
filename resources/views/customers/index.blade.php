<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Inicio Customers</title>
    </head>
    <body><nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="justify-content-md-end">
                    <a href="/create" class="btn btn-outline-primary">Nuevo</a>
                </div>
              </li>
            </ul>
            <form method="GET" action="/customers" class="d-flex" role="search">
                <input class="form-control me-2" type="search" id="filt" name="filt" class="form-control me-2" type="search">
                <button type="submit" class="btn btn-outline-success" >Buscar</button>
            </form>
          </div>
        </div>
      </nav>
        <div class="row">
            <div class="col">
                @if(!$customers->isEmpty())
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Actions</th>
                                <th scope="col">DNI</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">NAME</th>
                                <th scope="col">LAST NAME</th>
                                <th scope="col">ADDRESS</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>
                                <form action="{{ url('destroy/'.$customer->id)}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form> 
                            </td>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->email}}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                @else
                  <p>Registro no existe</p>
                @endif
            </div>   
        </div>   
    </body>
</html>