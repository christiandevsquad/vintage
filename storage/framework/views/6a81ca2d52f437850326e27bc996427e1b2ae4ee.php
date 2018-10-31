<?php $__env->startSection('under_nav'); ?>
    <div class="container">
        <div class="row justify-content-center" style="margin-top:20px;">
            <div class="card text-center" style="width: 40rem;">
            <img class="card-img-top" src="images/vintage_m.png" alt="Card image cap">
            <div class="card-body">
                <form action="/action_page.php">
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" placeholder="Email" id="email">
                </div>

                <div class="form-group">
                    <label for="pwd"></label>
                    <input type="password" class="form-control" placeholder="Password" id="pwd">
                </div>

                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary">SIGN IN</a>
                    <button type="button" class="btn btn-outline-primary">SIGN UP</a>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>