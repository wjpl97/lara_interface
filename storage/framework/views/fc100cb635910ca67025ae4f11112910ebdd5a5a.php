<div class="container">
        <div class="row" style="margin-top: 2%;">

                <div class="col-md-2">
                    <!-- Logo -->
                    <h4 class="text-dark">Susurro Project</h4>
                </div>
                <div class="col-md-6">
                    <!-- Toggle -->
                    <button class="btn btn-warning">Diseño</button>
                    <button class="btn btn-warning">Voz</button>
                </div>
                <div class="col-md-4">
                    <!-- Menu -->
                    <?php echo $__env->make('includes.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
</div>