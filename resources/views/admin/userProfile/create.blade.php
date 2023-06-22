<x-frontend.master>

    <main id="main">
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="index (2).html">Profile</a>
                <a class="nav-link" href="billing.html">Billing</a>
                <a class="nav-link" href="scurity.html">Security</a>

            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2"
                                src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    @if (session('message'))
                        <p class="alert alert-success">{{ session('message') }}</p>
                    @endif
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form action="route('profile') }}" method="POST">
                                @csrf
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">User name</label>
                                    <input class="form-control" id="inputUsername" type="text" name="username"
                                        placeholder="Enter your Full Name" value="{{ Auth::user()->name }}">
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email" readonly
                                        placeholder="Enter your email address" value="{{ Auth::user()->email }}">
                                </div>

                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">

                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Present Address</label>
                                        <input class="form-control" id="inputLocation" type="text" name="address"
                                            placeholder="Enter your address" value="">
                                    </div>
                                    <!-- Form Group (organization name)-->

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Location</label>
                                        <input class="form-control" id="inputLocation" type="text" name="location"
                                            placeholder="Enter your location" value="">
                                    </div>

                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input class="form-control" id="inputPhone" type="tel" name="mobile_no"
                                            placeholder="Enter your phone number" value="">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input class="form-control" id="inputBirthday" type="date" name="dob"
                                            placeholder="Enter your birthday" value="">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
</x-frontend.master>
