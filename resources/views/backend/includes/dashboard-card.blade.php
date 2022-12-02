<?php 
    use App\Models\Backend\Products;
    use App\Models\User;
?>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">
                <h5>Total Users</h5>
                <span>
                    <?php 
                        $totalU = User::all()->count('id');
                        echo  $totalU;           
                    ?>
                </span>
            </div>

            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('showproducts') }}">Manage Users</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <h5>Total Product</h5>
                <span>
                    <?php 
                        $totalP = Products::all()->count('id');
                        echo  $totalP;           
                    ?>
                </span>
            </div>

            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('showproducts') }}">Manage Products</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<!--  -->