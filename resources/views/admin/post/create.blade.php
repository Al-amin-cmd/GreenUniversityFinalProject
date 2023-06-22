<x-admin.master>



    <body>
        <div class="container pt-4">
            <div class="headmenu position-relative bg-dark bg-gradient rounded pt-2">
                <h2 class="h2 text-white">Post</h2>
                <div class="btn-toolbar mb-2 mb-md-0 position-absolute top-0 end-0 pt-2 ">
                    {{-- <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                    </div> --}}
                    <a href="{{ route('post.index') }}"><button type="button" class="btn btn-sm btn-outline-primary"><span
                                data-feather="plus"></span>List</button></a>

                </div>

            </div>
            <x-forms.message />
            <div class="campe bg-#f1f1f1f1"
                style="width: 100%; padding-top:20px; border:1px solid black; border-radius: 15px;">

                <form class="row g-3 needs-validation" novalidate action="{{ route('post.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="basicinfo">
                        <h4>Add Post Form</h4>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="validationCustom01" value=""
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Post Image</label>
                        <input type="file" name="image" class="form-control" id="validationCustom02"
                            value="">
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
