<?php $title="Dashboard"; ?>

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
                        @include('backend.includes.dashboard-card')
                    </div>
                </main>
                @include('backend.includes.footer')
            </div>
        </div>
        @include('backend.includes.js')
    </body>
</html>
