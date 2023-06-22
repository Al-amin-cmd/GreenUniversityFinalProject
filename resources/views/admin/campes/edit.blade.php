<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-dark bg-gradient rounded pt-2">
            <h2 class="h2 text-white">Campe Deatils Edit</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">
                <div class="btn-group me-2" style="position: relative; left: -10px;">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button> --}}
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button> --}}
                </div>
                <a href="{{ route('campes.index') }}" style="position: relative; left: -10px;"><button type="button"
                        class="btn btn-sm btn-outline-primary bg-info"><span data-feather="plus"></span>List</button></a>

            </div>

        </div>
        <x-forms.message />

        <div class="campe bg-#f1f1f1f1"
            style="width: 100%; padding-top:20px; border:1px solid black; border-radius: 15px;">

            <form action="{{ route('campes.update', $campes->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-floating mb-3" style="width: 50%; margin: auto;">
                    <input type="text" value="{{ $campes->name }}" name="name" class="form-control"
                        id="floatingName" placeholder="campe name">
                    <label for="floatingInput">Campe Name</label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3" style="width: 50%; margin: auto;">
                    <input type="text" value="{{ $campes->address }}" name="address" class="form-control"
                        id="floatingAddress" placeholder="text">
                    <label for="floatingPassword">Address</label>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3" style="width: 50%; margin: auto;">
                    <input type="text" value="{{ $campes->location }}" name="location" class="form-control"
                        id="floatingLocation" placeholder="text">
                    <label for="floatingPassword">Location</label>
                    @error('location')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div style="width: 50%; margin: auto;">
                    <input class=" btn btn-info rounded" type="submit" value="Update">
                </div>
                <br>
            </form>
        </div>
    </div>
</x-admin.master>
