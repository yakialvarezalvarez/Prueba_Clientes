<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Crear Customer</title>
    </head>
    <body>
        <div class="row">
            <div class="col">
                <form action="/store" method="POST"> 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="input" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputLastName1" class="form-label">Last Name</label>
                        <input type="input" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAddress1" class="form-label">Address</label>
                        <input type="input" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="Comune" class="form-label">Commune</label>
                        <select class="form-select" id="commune_id" name="commune_id" required>
                            @foreach ($communes as $commune)
                                <option value="{{$commune['id'] }}">{{ $commune['description']}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid state.
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>   
        </div>   
    </body>
</html>