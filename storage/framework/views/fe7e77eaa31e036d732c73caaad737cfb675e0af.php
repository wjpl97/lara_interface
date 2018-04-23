<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="text-success">Paneles de informacion</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="panel-footer">
                    <h6>Esta es información complementaria</h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>