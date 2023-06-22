<x-admin.master>

    <div class="container">

        <div class="headmenu bg-light rounded pt-2">
            <h2 class="h2 text-black bg-light">Post Deatils Trash List</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group me-2" style="position: relative; left:-10px">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('post.index') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">List</button></a>
                    @endcan
                </div>
                <a href="{{ route('post.create') }}" style="position: relative; left:-10px"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>Add
                        New</button></a>

            </div>
        </div>



        @if (session('message'))
            <span class="text-success">{{ session('message') }}</span>
        @endif
        <div class="container">
            <table class="table">
                <thead class="bg-success">
                    <tr>
                        <th>SL#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    @foreach ($posts as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->title }}</td>
                            <td style="width: 450px">{{ $row->description }}</td>
                            <td>
                                <img src="{{ asset('storage/Post_image/' . $row->image) }}" alt="Picture"
                                    style="width: 60px;">
                            </td>
                            <td><button type="button" class="btn btn-warning"><a href=""
                                        class="text-white text-decoration-none">Show</a></button>
                                <button type="button" class="btn btn-primary tex"><a
                                        href="{{ route('restore', $row->id) }}"
                                        class="text-white text-decoration-none">Resotre</a></button>
                                <form action="{{ route('delete', $row->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger text-white"
                                        onclick="return confirm('Are you sure want to delete')"
                                        title="Permanent Delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.master>
