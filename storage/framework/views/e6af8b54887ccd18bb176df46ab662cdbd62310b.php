<?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row" style="padding-top:30px;">
        <div class="col-2">
          <ul class="nav nav-pills flex-column sidenav">
            <h4 style="text-align:center">MENU</h4>
            <li class="nav-item">
              <a class="nav-link" href="#">PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ORDERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CUSTOMERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ANALITYCS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DISCOUNTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">APPS</a>
            </li>
          </ul>
          <hr class="d-sm-none">
        </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>