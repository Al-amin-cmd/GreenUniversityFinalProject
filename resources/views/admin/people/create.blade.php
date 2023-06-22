<x-admin.master>


    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="headmenu position-relative rounded bg-info">
            <h2 class="h2 text-white">People Add</h2>
            <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">

                <a href="{{ route('people.index') }}"><button type="button"
                        class="btn btn-sm btn-outline-primary"><span data-feather="plus"></span>List</button></a>

            </div>
        </div>
        <x-forms.message />
        <div class="container bg-#cccccc">
            <form action="{{ route('people.store') }}" method="POST" class="row g-3 needs-validation" novalidate
                enctype="multipart/form-data">
                @csrf
                <div class="basicinfo">
                    <h4>Basic Information</h4>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" name="first_name" value="" class="form-control first_name"
                        id="validationCustom01" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Middile Name</label>
                    <input type="text" name="middile_name" value="" class="form-control middile_name"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Last Name</label>
                    <input type="text" name="last_name" value="" class="form-control last_name"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Full Name Bangla</label>
                    <input type="text" name="full_name_bangla" value="" class="form-control full_name_bangla"
                        id="validationCustom01" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Father Name</label>
                    <input type="text" name="father_name" value="" class="form-control father_name"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Father Name Bangla</label>
                    <input type="text" name="father_name_bangla" value=""
                        class="form-control father_name_bangla" id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Father NID No:</label>
                    <input type="text" name="father_nid_no" value="" class="form-control father_nid_no"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>


                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Mother Name</label>
                    <input type="text" name="mother_name" value="" class="form-control mother_name"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Mother Name Bangla</label>
                    <input type="text" name="mother_name_bangla" class="form-control mother_name_bangla"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Mother NID NO:</label>
                    <input type="text" name="mother_nid_no" value="" class="form-control mother_nid_no"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Spouse's Name</label>
                    <input type="text" name="spouses_name" value="" class="form-control spouses_name"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Spouse's Name Bangla</label>
                    <input type="text" name="spouses_name_bangla" value=""
                        class="form-control spouses_name_bangla" id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Spouse's NID No:</label>
                    <input type="text" name="spouses_nid_no" value="" class="form-control spouses_nid_no"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Birth Date</label>
                    <input type="date" name="dob" class="form-control dob" id="validationCustom02"
                        value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Birth Place</label>
                    <input type="text" name="birth_place" value="" class="form-control birth_place"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Nationality</label>
                    <select name="nationality" class="form-select" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">Bangladesh</option>
                        <option value="2">MayenMar</option>
                        <option value="3">Nepal</option>
                        <option value="4">India</option>
                        <option value="5">Pakistan</option>
                        <option value="6">Malasya</option>
                        <option value="7">Honkon</option>
                        <option value="8">Sudan</option>
                        <option value="9">Vitname</option>
                        <option value="10">Singapur</option>
                        <option value="11">Vuttan</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">Religion</label>
                    <select name="religion" class="form-select religion" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">Islam</option>
                        <option value="2">Hindu</option>
                        <option value="3">Other</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">Blood Group</label>
                    <select name="blood_group" class="form-select blood_group" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">AB+</option>
                        <option value="6">AB-</option>
                        <option value="7">O+</option>
                        <option value="8">O-</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">Gender</label>
                    <select name="gender" class="form-select gender" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Eduction Level</label>
                    <select name="eduction_level" class="form-select eduction_level" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">PSC</option>
                        <option value="2">SSC</option>
                        <option value="3">HSC</option>
                        <option value="4">Diploma</option>
                        <option value="5">Honurs</option>
                        <option value="6">BSc</option>
                        <option value="7">MSC</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Befor Profession</label>
                    <select name="befor_profession" class="form-select befor_profession" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">Farmer</option>
                        <option value="2">Doctor</option>
                        <option value="3">Teacher</option>
                        <option value="4">Driver</option>
                        <option value="5">Other Job</option>
                        <option value="6">Other</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Disables</label>
                    <select name="disables" class="form-select disables" id="validationCustom04">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Mobile No:</label>
                    <input type="text" name="mobile_no" class="form-control mobile_no" id="validationCustom02"
                        value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="addressHead">
                    <H4>Permament Address</H4>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Village</label>
                    <input type="text" name="permament_village" class="form-control permament_village"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Post Office</label>
                    <input type="text" name="permament_post_office" class="form-control permament_post_office"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Post Code</label>
                    <input type="text" name="permament_post_code" class="form-control permament_post_code"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Thana</label>
                    <input type="text" name="permament_thana" class="form-control permament_thana"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">District</label>
                    <input type="text" name="permament_district" class="form-control permament_district"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Division</label>
                    <input type="text" name="permament_division" class="form-control permament_division"
                        id="validationCustom02" value="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="presentAddress">
                    <H4>Present Address</H4>
                </div>

                <div class="col-md-8">
                    <label for="validationCustom02" class="form-label">Campe Name</label>
                    <select class="form-control" name="campe_id" id="campe_id">
                        <option value="">Select One</option>
                        @foreach ($campes as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}, {{ $row->address }},
                                {{ $row->location }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Campe Address</label>

                    <select class="form-control" name="present_campe_address" id="present_campe_address">
                        <option value="">Select One</option>
                        @foreach ($campes as $row)
                            <option value="{{ $row->id }}">{{ $row->address }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">Campe Location</label>

                    <select class="form-control" name="present_campe_location" id="present_campe_location">
                        <option value="">Select One Campe location</option>
                        @foreach ($campes as $row)
                            <option value="{{ $row->id }}">{{ $row->location }}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="mb-3 col-md-6">
                    <label for="validationCustom02" class="form-label">Picture Upload</label>
                    <input type="file" name="image" class="form-control image" aria-label="file example"
                        required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>

                {{-- <div class="mb-3 col-md-6">
                    <label for="validationCustom02" class="form-label">Document Upload</label>
                    <input type="file" name="document" class="form-control document" aria-label="file example">
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div> --}}
                <!-- <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div> -->
                <div class="col-12 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary m-1" type="submit">Submit form</button>
                    <input class="btn btn-primary m-1" type="reset" value="Reset">
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body>

    </html>



</x-admin.master>
