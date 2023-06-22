<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-dark bg-gradient rounded pt-2">
            <h2 class="h2 text-white">User Role Edit</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>

                </div>
                <a href="{{ route('role') }}"><button type="button" class="btn btn-sm btn-outline-primary"><span
                            data-feather="plus"></span>List</button></a>

            </div>

        </div>
        <x-forms.message />
        <div class="campe bg-#f1f1f1f1"
            style="width: 100%; padding-top:20px; border:1px solid black; border-radius: 15px;">

            <form class="row g-3 needs-validation" novalidate action="{{ route('update', $users->id) }}" method="POST">
                @csrf


                <div class="basicinfo">
                    <h4>User Role Edit Form</h4>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="validationCustom02" class="form-label">Role Name</label>
                    <select class="form-control" name="name" id="name">
                        <option value="">Select One</option>
                        @foreach ($users as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>


                <div class="col-12 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary m-1" type="submit">Update</button>
                    <input class="btn btn-primary m-1" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
</x-admin.master>
