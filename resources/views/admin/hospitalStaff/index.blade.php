<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-light bg-gradient  rounded pt-2">
            <h2 class="h2 text-info">Hospital List</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group bg-light me-2">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('hospitalStaff.trash') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">Trash</button></a>
                    @endcan
                </div>
                <a class="bg-light" href="{{ route('hospitalStaff.create') }}"><button type="button"
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
                        <th>Hostipal Name</th>
                        <th>Imge</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($hospitalStaff as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->designation }}</td>
                            <td>{{ $row->hospitalstaff->name }}</td>
                            <td><img src="{{ asset('storage/Hospital_staff_image/' . $row->image) }}" alt="Picture"
                                    style="width: 60px;"></td>
                            <td>
                                <button type="button" class="btn btn-primary tex"><a
                                        href="{{ route('hospitalStaff.edit', $row->id) }}"
                                        class="text-white text-decoration-none">Edit</a></button>
                                <form action="{{ route('hospitalStaff.destroy', $row->id) }}" method="POST"
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
