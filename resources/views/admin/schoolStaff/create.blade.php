<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-dark bg-gradient rounded pt-2">
            <h2 class="h2 text-white">Staff Deatils</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">

                <a href="{{ route('schoolStaff.index') }}"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>List</button></a>

            </div>

        </div>
        <x-forms.message />
        <div class="campe bg-#f1f1f1f1"
            style="width: 100%; padding-top:20px; border:1px solid black; border-radius: 15px;">

            <form class="row g-3 needs-validation" novalidate action="{{ route('schoolStaff.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="basicinfo">
                    <h4>School Staff Add Form</h4>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Staff name</label>
                    <input type="text" name="name" class="form-control" id="validationCustom01" value=""
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" id="validationCustom01" value=""
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Position</label>
                    <input type="text" name="position" class="form-control" id="validationCustom01" value=""
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="validationCustom02" class="form-label">School Name</label>
                    <select class="form-control" name="school_id" id="school_id">
                        <option value="">Select One</option>
                        @foreach ($school as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Staff Image</label>
                    <input type="file" name="image" class="form-control" id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-12 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary m-1" type="submit">Submit form</button>
                    <input class="btn btn-primary m-1" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
</x-admin.master>
