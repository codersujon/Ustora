<?php $title = "Add New Product"; ?>

@include('backend.includes.header')

<body class="sb-nav-fixed">

    @include('backend.includes.nav')

    <div id="layoutSidenav">
        @include('backend.includes.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"><?= $title; ?></h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                    <!-- Add Product Form -->
                    <div class="addproduct">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <div class="card shadow-sm border-0 rounded-lg">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-2"><?= $title; ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="name" placeholder="Enter Product Name" required/>
                                                <label for="name">Enter Product Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name" required />
                                                <label for="category_name">Enter Category Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="brand_name" name="brand_name" placeholder="Enter Brand Name" required/>
                                                <label for="brand_name">Enter Brand Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Product Description" required></textarea>
                                                <label for="description">Product Description</label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="image">Product Image</label>
                                                <input type="file" class="form-control" id="image" name="image" required/>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="status">Select Product Status</label>
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="">-----Select Status-----</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-block btn-primary">Add Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('backend.includes.footer')
        </div>
    </div>
    @include('backend.includes.js')
</body>

</html>