<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-light bg-gradient rounded pt-2">
            <h2 class="h2 text-info">Police Station List</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group me-2">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('policeStation.trash') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">Trash</button></a>
                    @endcan
                </div>
                <a href="{{ route('policeStation.create') }}"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>Add New</button></a>

            </div>
        </div>

        <div>
            <table class="table table-striped">
                <thead class="bg-success rounded">
                    <tr>
                        <th>SL#</th>
                        <th>Station Name</th>
                        <th>Active Force</th>
                        <th>Campe Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($station as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->active_force }}</td>
                            <td>{{ $row->campename->name }}</td>
                            <td>
                                <button type="button" class="btn btn-warning"><a
                                        class="text-white text-decoration-none"
                                        href="{{ route('policeStation.edit', $row->id) }}">Edit</a></button>

                                <form action="{{ route('policeStation.destroy', $row->id) }}" method="POST"
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

</x-admin.master>
