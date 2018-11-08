<?php $__env->startSection('content'); ?>

<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary">Add Product</button>
    </div>
    <div class="btn-group mr-2" role="group" aria-label="Second group">
        <button type="button" class="btn btn-outline-success">Import Product</button>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search product" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-success" type="button">Search</button>
        </div>
    </div>
    
    <table class="table table-hover" id="table" style="margin-top:20px;" >
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Sub Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class='item<?php echo e($item->id); ?>'>
                <td style="text-align:center"><?php echo e($item->id); ?></td>
                <td style="text-align:center"><?php echo e($item->name); ?></td>
                <td style="text-align:center"><?php echo e($item->subName); ?></td>
                <td style="text-align:center"><?php echo e($item->price); ?></td>
                <td style='text-align:center; white-space: nowrap'>
                    <a href="<?php echo e(action('ProductController@show', $item->id)); ?>" class="delete-modal btn btn-success btn-xs">Edit</button>
                    <a href="<?php echo e(action('ProductController@destroy', $item)); ?>" class="delete-modal btn btn-danger btn-xs">Delete</button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->links()); ?>

</div>

<script>
    $(document).ready(function() {
        $('#table').DataTable( {
            "pagingType": "full_numbers"
        } );
    } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>