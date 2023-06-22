<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-light bg-gradient rounded pt-2">
            <h2 class="h2 text-info">Campe Deatils Add</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group me-2">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('campes.trash') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">Trash</button></a>
                    @endcan
                </div>
                <a href="{{ route('campes.create') }}"><button type="button" class="btn btn-sm btn-outline-primary"><span
                            data-feather="plus"></span>Add New</button></a>

            </div>
        </div>

        @if (session('message'))
            <span class="text-success">{{ session('message') }}</span>
        @endif

        <div>
            <table class="table table-striped">
                <thead class="bg-success rounded">
                    <tr>
                        <th>SL#</th>
                        <th>Campe Code</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($campes as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->campe_code }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->location }}</td>
                            <td><button type="button" class="btn btn-primary"><a
                                        class="text-white text-decoration-none"
                                        href="{{ route('campes.show', $row->id) }}">Show</a></button>
                                <button type="button" class="btn btn-warning"><a
                                        class="text-white text-decoration-none"
                                        href="{{ route('campes.edit', $row->id) }}">Edit</a></button>
                                <form action="{{ route('campes.destroy', $row->id) }}" method="POST"
                                    style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger text-white"
                                        onclick="return confirm('Are you sure want to delete')">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
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
