<?php $title = "Create New User"; ?>

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
                    <div class="addUser">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <div class="card shadow-sm border-0 rounded-lg">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-3"><?= $title; ?></h3>
                                    </div>
                                    <div class="card-body p-5">
                                        <form action="{{ route('adduser') }}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="name" placeholder="Enter your name" required />
                                                <label for="name">Enter your name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" placeholder="name@example.com" required />
                                                <label for="email">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required />
                                                        <label for="password">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required />
                                                        <label for="password_confirmation">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" type="submit">Add User</button>
                                                </div>
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