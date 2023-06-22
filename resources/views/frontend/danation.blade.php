<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Donation From</title>
</head>

<body>

    <x-frontend.master>

        <!-- ======= Header ======= -->
        <!-- End Header -->



        <main id="main">

            <div class="container pd-4">
                <div class="container" style="padding-top: 10px; ">
                    <h3>Donation From</h3>
                    <div class="donationFrom">

                        <form class="row g-3">
                            <div class="col-md-8">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                            </div>

                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">Email</label>
                                <input type="text" class="form-control" id="validationDefault02"required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">Acount Number</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">TrxID</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationDefault02" class="form-label">Country</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                            </div>

                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                    </form>

                </div>
            </div>
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <!-- End Footer -->
    </x-frontend.master>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
