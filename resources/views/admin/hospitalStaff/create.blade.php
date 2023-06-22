<x-admin.master>

    <div class="container pt-4">
        <div class="headmenu position-relative bg-light bg-gradient rounded pt-2">
            <h2 class="h2 text-info">Police Station Deatils</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">
                {{-- <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                </div> --}}
                <a href="{{ route('hospitalStaff.index') }}"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>List</button></a>

            </div>

        </div>
        <x-forms.message />
        <div class="campe bg-#f1f1f1f1"
            style="width: 100%; padding-top:20px; border:1px solid black; border-radius: 15px;">

            <form class="row g-3 needs-validation" novalidate action="{{ route('hospitalStaff.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="basicinfo">
                    <h4>Hospital Staff Add Form</h4>
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

                <div class="mb-3 col-md-4">
                    <label for="validationCustom02" class="form-label">Hospital Name</label>
                    <select class="form-control" name="hostipal_id" id="hostipal_id">
                        <option value="">Select One</option>
                        @foreach ($hospital as $key => $value)
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

    </html>
</x-admin.master>
