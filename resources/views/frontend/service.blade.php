<x-frontend.master>

    <main id="main">


        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>All Post</h2>
                        <p>The refugee management system is an organized framework designed to address the complex
                            challenges associated with the displacement and protection of refugees. It encompasses a
                            range of policies, procedures, and services aimed at ensuring the safety, well-being, and
                            successful integration of refugees into host communities. The system operates at local,
                            national, and international levels, involving various stakeholders such as governments,
                            international organizations, NGOs, and local communities.</p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">


                <hr>

                <div class="row">
                    @foreach ($posts as $row)
                        <div class="title">

                            <H3>{{ $row->title }}</H3>

                        </div>
                        <div class="details"
                            style="display: flex;
                    align-items: center;
                    justify-content: center">
                            <div class="image">
                                <img style="height:200px; width:400px;"
                                    src="{{ asset('storage/Post_image/' . $row->image) }}" alt="Picture">


                            </div>
                            <div class="text m-2">
                                <p>{{ $row->description }}</p>
                            </div>

                        </div>
                    @endforeach

                </div>
                <hr>

                <div class="comment">
                    <h3>You Can Give Your Opinion here</h3>
                </div>
                <div class="col-md-12 pb-2 pt-2 bg-light shadow p-2 mb-5">
                    <form action="{{ route('feedback.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstname">Full name</label>
                                <input type="text" name="name" class="form-control" placeholder="First name"
                                    aria-label="First name" required>
                            </div>


                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="email"
                                    aria-label="email" required>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" name="message"
                                    class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" required rows="3"></textarea>
                            </div>

                            <div class="col-md-6 d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary"><a href=""
                                        onclick="return confirm('Thank you ')">Submit</a></button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End About Section -->






    </main><!-- End #main -->
</x-frontend.master>
