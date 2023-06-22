<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-light bg-gradient rounded pt-2">
            <h2 class="h2 text-info">School Staff List</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group me-2">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('schoolStaff.trash') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">Trash</button></a>
                    @endcan
                </div>
                <a href="{{ route('schoolStaff.create') }}"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>Add New</button></a>

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
                        <th>Staff Name</th>
                        <th>Designation</th>
                        <th>position</th>
                        <th>School Name</th>
                        <th>Imge</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($schoolStaff as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->designation }}</td>
                            <td>{{ $row->position }}</td>
                            <td>{{ $row->ssftaff->name }}</td>
                            <td style="width: 100px"><img src="{{ asset('storage/School_staff_image/' . $row->image) }}"
                                    alt="Picture" style="width: 60px;"></td>

                            <td><button type="button" class="btn btn-primary"><a
                                        class="text-white text-decoration-none"
                                        href="{{ route('schoolStaff.show', $row->id) }}">Show</a></button>
                                <button type="button" class="btn btn-warning"><a
                                        class="text-white text-decoration-none"
                                        href="{{ route('schoolStaff.edit', $row->id) }}">Edit</a></button>
                                <form action="{{ route('schoolStaff.destroy', $row->id) }}" method="POST"
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
