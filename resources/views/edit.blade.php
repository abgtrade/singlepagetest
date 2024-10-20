<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Test Project</title>
    </head>

    <body>




        <section class="container mt-4">
            <div class="row p-1 bg-primary">
                <div class="col-lg-6">
                    <h2 class="text-white">Edit Company Information</h2>
                </div>
            </div>
        </section>

        <div class="container mt-5">
            <form action="{{route("update")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control mb-3" name="name" value="{{$company["name"]}}">

                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control mb-3" name="mobile" value="{{$company["mobile"]}}">

                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control mb-3" name="email" value="{{$company["email"]}}">

                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$company["address"]}}">
                    </div>
                    <div class="col-md-6">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control mb-3" name="logo">
                        <img src="{{asset($company["logo"])}}" width="100" height="100"><br>

                        <label for="logo" class="form-label mt-3">Icon</label>
                        <input type="file" class="form-control mb-3" name="icon">
                        <img src="{{asset($company["icon"])}}" width="100" height="100">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>

    </body>

</html>
