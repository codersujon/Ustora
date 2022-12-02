<?php $title="All Product Manage"; ?>

@include('backend.includes.header')

    <body class="sb-nav-fixed">

        @include('backend.includes.nav')

        <div id="layoutSidenav">
            @include('backend.includes.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $title;?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $title;?></li>
                        </ol>
                        <div class="card shadow-sm mb-4">
                            <div class="card-header d-flex justify-content-between">
                                <label>
                                 <i class="fas fa-table me-1"></i><?= $title;?>
                                </label>
                                <a href="{{ route('product') }}" class="btn btn-sm btn-primary float-right">
                                    <i class="fas fa-plus"></i> Add Product
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#Sl No</th>
                                            <th>Product Name</th>
                                            <th>Category Name</th>
                                            <th>Brand Name</th>
                                            <th>Description</th>
                                            <th>Product Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#Sl No</th>
                                            <th>Product Name</th>
                                            <th>Category Name</th>
                                            <th>Brand Name</th>
                                            <th>Description</th>
                                            <th>Product Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                      @php  $sl=1; @endphp
                                      @foreach($products  as $product)
                                        <tr>
                                            <td>{{ $sl++ }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ $product->brand_name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>
                                                <img src="{{ asset('backend/img/'.$product->image) }}" alt="" width="50px" height="50px">
                                            </td>
                                            <td>

                                                @if($product->status == 1)
                                                <a href="" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Active</a>
                                                @else 
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Inactive</a>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('edit', $product->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="{{ route('delete', $product->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
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
