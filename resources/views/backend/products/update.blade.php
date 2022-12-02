<?php $title = "Update Product"; ?>

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
                    <div class="updateproduct">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <div class="card shadow-sm border-0 rounded-lg">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-2"><?= $title; ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('update', $findProduct->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" value="{{ $findProduct->name }}" name="name" placeholder="Enter Product Name" required/>
                                                <label for="name">Enter Product Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" value="{{ $findProduct->category_name }}" name="category_name" placeholder="Enter Category Name" required />
                                                <label for="category_name">Enter Category Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" value="{{ $findProduct->brand_name }}" name="brand_name" placeholder="Enter Brand Name" required/>
                                                <label for="brand_name">Enter Brand Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="description" value="{{ $findProduct->description }}" cols="30" rows="5" class="form-control" placeholder="Product Description" required></textarea>
                                                <label for="description">Product Description</label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="image">Product Image</label>
                                                <input type="file" class="form-control" value="{{ $findProduct->image }}" name="image" required/>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="status">Select Product Status</label>
                                                <select name="status" value="{{ $findProduct->status }}" class="form-control" required>
                                                    <option value="">-----Select Status-----</option>
                                                    <option value="1" @if ($findProduct->status == 1) selected @endif>Active</option>
                                                    <option value="0" @if ($findProduct->status == 0) selected @endif>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-block btn-info">Update Product</button>
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