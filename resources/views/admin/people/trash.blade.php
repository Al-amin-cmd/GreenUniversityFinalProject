<x-admin.master>

    <div class="headmenu position-relative bg-light bg-gradient rounded pt-2">
        <h2 class="h2 text-info">People Deatils Trash List</h2>
        <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
            <div class="btn-group me-2">
                @can('superAdmin')
                    <a href="{{ route('people.index') }}"><button type="button"
                            class="btn btn-sm btn-outline-danger">list</button></a>
                @endcan
            </div>
            <a href="{{ route('people.create') }}"><button type="button" class="btn btn-sm btn-outline-primary"><span
                        data-feather="plus"></span>Add New</button></a>

        </div>
    </div>

    @if (session('message'))
        <span class="text-success">{{ session('message') }}</span>
    @endif

    <div style="width: 1500px;">
        <table class="table">
            <thead class="bg-success rounded">
                <tr>

                    <th style="width: 20px">SL#</th>
                    <th style="width: 70px">NID NO:</th>
                    <th style="width: 140px">Full Name</th>
                    <th style="width: 100px">Father_Name</th>
                    <th style="width: 100px">Mother_Name</th>
                    <th style="width: 80px">Birthday</th>
                    <th style="width: 100px">Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $row)
                    <tr>

                        <td style="width: 20px">{{ $row->id }}</td>
                        <td style="width: 70px">{{ $row->nid_code }}</td>
                        <td style="width: 140px">{{ $row->first_name }} {{ $row->middile_name }}
                            {{ $row->last_name }}</td>
                        <td style="width: 100px">{{ $row->father_name }}</td>
                        <td style="width: 100px">{{ $row->mother_name }}</td>
                        <td style="width: 100px">{{ $row->dob }}</td>
                        <td style="width: 100px"><img src="{{ asset('storage/People_image/' . $row->image) }}"
                                alt="Picture" style="width: 60px;"></td>

                        <td><button type="button" class="btn btn-warning"><a href=""
                                    class="text-white text-decoration-none">Show</a></button>
                            <button type="button" class="btn btn-primary tex"><a
                                    href="{{ route('people.restore', $row->id) }}"
                                    class="text-white text-decoration-none">Resotre</a></button>
                            <form action="{{ route('people.destroy', $row->id) }}" method="POST"
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
</x-admin.master>
