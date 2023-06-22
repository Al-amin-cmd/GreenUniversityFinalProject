<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-dark bg-gradient rounded pt-2">
            <h2 class="h2 text-white">Police Deatils Add</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">
                <div class="btn-group me-2">


                </div>
                <a href="{{ route('police.index') }}"><button type="button" class="btn btn-sm btn-outline-primary"><span
                            data-feather="plus"></span>List</button></a>

            </div>

        </div>
        <x-forms.message />
        <div class="campe bg-#f1f1f1f1"
            style="width: 100%; padding-top:20px; border:1px solid black; border-radius: 15px;">

            <form action="{{ route('police.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-2" style="width: 50%; margin: auto;">
                    <input type="text" name="name" class="form-control" id="floatingName"
                        placeholder="police name">
                    <label for="floatingInput">Police Name</label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-2" style="width: 50%; margin: auto;">
                    <input type="text" name="designation" class="form-control" id="floatingAddress"
                        placeholder="text">
                    <label for="floatingPassword">Designation</label>
                    @error('designation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-2" style="width: 50%; margin: auto;">
                    <select class="form-control" name="police_station_id" id="police_station_id">
                        <option value="">Select One</option>
                        @foreach ($station as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach

                    </select>
                    <label for="floatingPassword">Police Station Name</label>


                </div>

                <div class="mb-2" style="width: 50%; margin: auto;">
                    <input type="file" name="image" class="form-control" id="floatingLocation" placeholder="file">
                    <label for="floatingPassword">Picture</label>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div style="width: 50%; margin: auto;">
                    <input class="btn-info rounded" type="submit" value=" Save Data">
                </div>
            </form>
        </div>
    </div>
</x-admin.master>
