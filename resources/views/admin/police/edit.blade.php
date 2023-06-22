<x-admin.master>


    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- <title>Hello, world!</title> --}}
    </head>

    <body>
        <div class="container pt-4">
            <div class="headmenu position-relative bg-dark bg-gradient rounded pt-2">
                <h2 class="h2 text-white">Police Deatils Add</h2>
                <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">

                    <a href="{{ route('police.index') }}"><button type="button"
                            class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>List</button></a>

                </div>

            </div>
            <x-forms.message />
            <div class="campe bg-secondary" style="width: 100%; padding-top:20px;">

                <form action="{{ route('police.update', $police->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-2" style="width: 50%; margin: auto;">
                        <input type="text" value="{{ $police->name }}" name="name" class="form-control"
                            id="floatingName" placeholder="police name">
                        <label for="floatingInput">Police Name</label>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2" style="width: 50%; margin: auto;">
                        <input type="text" value="{{ $police->designation }}" name="designation" class="form-control"
                            id="floatingAddress" placeholder="text">
                        <label for="floatingPassword">Designation</label>
                        @error('designation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="mb-2" style="width: 50%; margin: auto;">
                        <input type="file" name="image" class="form-control" id="floatingLocation"
                            placeholder="file">
                        <label for="floatingPassword">Picture</label>
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="width: 50%; margin: auto;">
                        <input class="btn-info rounded" type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

    </html>



</x-admin.master>
