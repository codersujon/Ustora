<?php $title="All Users"; ?>

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
                                <a href="{{ route('user') }}" class="btn btn-sm btn-primary float-right">
                                    <i class="fas fa-plus"></i> Add User
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#Sl No</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#Sl No</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                      @php  $sl=1; @endphp
                                      @foreach($users  as $user)
                                        <tr>
                                            <td>{{ $sl++ }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('edituser', $user->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="{{ route('deleteuser', $user->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
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
