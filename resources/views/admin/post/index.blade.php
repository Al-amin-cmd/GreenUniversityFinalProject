<x-admin.master>
    <div class="container">

        <div class="headmenu bg-light rounded pt-2">
            <h2 class="h2 text-black bg-light">Post Deatils</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group me-2" style="position: relative; left:-10px">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('trash') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">Trash</button></a>
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

        <table class="table">
            <thead class="bg-success">
                <tr>
                    <th>SL#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th style="width: 140px">Action</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                @foreach ($posts as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
                        <td style="width: 400px">{{ $row->description }}</td>
                        <td>
                            <img src="{{ asset('storage/Post_image/' . $row->image) }}" alt="Picture"
                                style="width: 80px;">
                        </td>
                        <td style="width: 140px">
                            <button type="button" class="btn btn-primary tex"><a
                                    href="{{ route('post.edit', $row->id) }}"
                                    class="text-white text-decoration-none">Edit</a></button>
                            <form action="{{ route('post.destroy', $row->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger text-white style="display: inline""
                                    onclick="return confirm('Are you sure want to delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.master>
