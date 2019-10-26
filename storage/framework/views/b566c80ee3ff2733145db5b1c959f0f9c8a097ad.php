<?php $__env->startSection('content'); ?>
    
    <div class="container" style="margin-top: 60px">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>

            <tr>
                <th class="th-sm">Group Name

                </th>
                <th class="th-sm">Group Type

                </th>
                <th class="th-sm">Account Name

                </th>
                <th class="th-sm">Post text

                </th>
                <th class="th-sm">time


            </tr>

            </thead>
            <tbody>
            <?php $__currentLoopData = $buffer_postings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buffer_posting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e(Bulkly\BufferPosting::find($buffer_posting->id)->groupInfo->name); ?></td>
                <td><?php echo e(Bulkly\BufferPosting::find($buffer_posting->id)->groupInfo->type); ?></td>
                <td><img style="width: 30px; height: 30px" src="<?php echo e(Bulkly\BufferPosting::find($buffer_posting->id)->accountInfo->avatar); ?>" alt=""></td>
                <td><?php echo e($buffer_posting->post_text); ?></td>
                <td><?php echo e($buffer_posting->created_at); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>
        <?php echo e($buffer_postings->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>