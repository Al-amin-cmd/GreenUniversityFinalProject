<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Id Card</title>
    <style>
        .card {
            background-image: url("{{ asset('ui/admin/assets/images/logo.jpg') }}");
            /* The image used */
            background-color: #cccccc;
            /* Used if the image is unavailable */
            height: 260px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            color: #faf8f8;

        }
    </style>
</head>

<body>
    <div class="headmenu position-relative bg-info bg-gradient rounded pt-2">
        <h2 class="h2 text-white">Id Card</h2>
        <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-1 ">

            <a href="{{ route('people.index') }}"><button type="button" class="btn btn-sm btn-outline-primary"><span
                        data-feather="plus"></span>List</button></a>

        </div>
    </div>
    <section class="" style="background-color: #fafafa;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                    <div class="card" style="border-radius: 15px; height: 260px; width:450px;">
                        <div class="card-body p-1">
                            <div style="background-color: #46467ca1; border-radius: 15px;">
                                <h4 style="text-align: center;">Refugee Managment System</h4>
                                <p style="text-align: center;">Provide Refugee Managment System <br>Natinal Id Card</p>

                                <hr>

                                <div class="d-flex text-black frontpage">
                                    <div class="flex-shrink-0 image">
                                        <img src="{{ asset('storage/People_image/' . $people->image) }}"
                                            alt="people image" class="img-fluid"
                                            style="max-width: 127px; max-height: 132px; min-width: 127px; min-height: 132px; border-radius: 10px;">
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1" style="color: rgba(250, 248, 248, 0.967);">Name:
                                            {{ $people->first_name }} {{ $people->middile_name }}
                                            {{ $people->last_name }}
                                        </h5>
                                        <p class="mb-1" style="color: rgba(255, 254, 254, 0.967);">Father Name:
                                            {{ $people->father_name }}</p>
                                        <p class="mb-1" style="color: rgba(255, 252, 252, 0.967);">Mother Name:
                                            {{ $people->mother_name }}</p>

                                        <p class="mb-1" style="color: rgba(250, 250, 250, 0.967);">Birthday:
                                            {{ $people->dob }}
                                        </p>
                                        <p class="mb-1" style="color: rgba(255, 255, 255, 0.967);">NID No:
                                            {{ $people->nid_code }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="border-radius: 15px; height: 260px; width:450px;">
                        <div class="card-body p-1">
                            <div class="d-flex text-black">
                                <div style="background-color: #46467ca1; border-radius: 15px;">
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1" style="text-align: center;">এই কার্ড রেফিউজি মানাগমেন্ট
                                            সিস্টেম
                                            একটা সম্পদ। যদি কার্ড হারিয়ে যাই কার্ড টি উক্ত ঠিকিনায় ফেরত দেওয়ার জন্য বলা
                                            হলো।
                                        </p>


                                        <div class="d-flex justify-content-start p-3 mb-1"
                                            style="background-color: #f7f3f3a0; position: relative; top: 120px; border-radius: 10px; left: -9px;">
                                            <div style="">
                                                <p class="small mb-1 rounded" style="color: rgb(7, 7, 7);">Campe Name:
                                                    {{ $people->peoplecampename->name }},
                                                    Address: {{ $people->peoplecampename->address }}
                                                    Location: {{ $people->peoplecampename->location }}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
