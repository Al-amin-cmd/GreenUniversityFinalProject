<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-white bg-gradient rounded pt-2">
            <h2 class="h2 text-white">Police Station Deatils </h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">
                <div class="btn-group me-2">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    @can('superAdmin')
                        <a href="{{ route('policeStation.index') }}"><button type="button"
                                class="btn btn-sm btn-outline-danger">list</button></a>
                    @endcan
                </div>
                <a href="{{ route('policeStation.create') }}"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>Add New</button></a>

            </div>
        </div>



        <div class="name bg-info bg-gradient rounded">
            <h2>Police Station Deatils List</h2>
        </div>
        @if (session('message'))
            <span class="text-success">{{ session('message') }}</span>
        @endif
        <div>
            <table class="table table-striped">
                <thead class="bg-success rounded">
                    <tr>
                        <th style="width: 50px">SL#</th>
                        <th style="width: 110px">Station Name</th>
                        <th style="width: 60px">Active Force</th>
                        <th style="width: 80px">Campe Name</th>
                        <th style="width: 110px">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($station as $row)
                        <tr>
                            <td style="width: 50px">{{ $row->id }}</td>
                            <td style="width: 110px">{{ $row->name }}</td>
                            <td style="width: 60px">{{ $row->active_force }}</td>
                            <td style="width: 80px"></td>
                            <td style="width: 110px">
                                <button type="button" class="btn btn-primary tex"><a
                                        href="{{ route('policeStation.restore', $row->id) }}"
                                        class="text-white text-decoration-none">Resotre</a></button>
                                <form action="{{ route('policeStation.delete', $row->id) }}" method="POST"
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
