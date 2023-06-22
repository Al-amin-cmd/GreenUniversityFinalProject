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
            <div class="headmenu position-relative bg-white bg-gradient rounded pt-2">
                <h2 class="h2 text-white">Campe Deatils Add</h2>
                <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                    {{-- <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                    </div> --}}
                    <a href="{{ route('campes.index') }}"><button type="button"
                            class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>List</button></a>

                </div>
            </div>
            <div class="name bg-info bg-gradient rounded">
                <h2>Show Deatils Campe</h2>
            </div>

            <div>
                <table class="table table-striped">
                    <thead class="bg-success rounded">
                        <tr>
                            <th>Campe Code</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $campes->campcode }}</td>
                            <td>{{ $campes->name }}</td>
                            <td>{{ $campes->address }}</td>
                            <td>{{ $campes->location }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

    </html>



</x-admin.master>
