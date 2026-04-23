<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<h2 style="text-align:center;">Daftar Chirps</h2>

<?php if(auth()->guard()->check()): ?>
<div style="background:white; padding:15px; border-radius:10px; margin-bottom:20px; max-width:500px; margin:auto;">
    <form method="POST" action="/chirps">
        <?php echo csrf_field(); ?>

        <textarea name="message"
            placeholder="What's on your mind?"
            style="width:100%; padding:10px; margin-bottom:10px;"></textarea>

        <div style="text-align:right;">
            <button>Chirp</button>
        </div>
    </form>
</div>
<?php endif; ?>

<?php $__currentLoopData = $chirps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chirp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="background:white; padding:15px; border-radius:10px; margin-bottom:10px; max-width:500px; margin:auto;">
        <b><?php echo e($chirp->message); ?></b>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\XboxGames\UTS_A710230009_Laravel-main\resources\views/home.blade.php ENDPATH**/ ?>