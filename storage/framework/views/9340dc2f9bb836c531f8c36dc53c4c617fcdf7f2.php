
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Teacher Table</title>
    <style>
    h1 {text-align: center;}
    form {
  text-align: center;
}
a {
    text-align: center; 
}
.container {
    margin-left: 380px;
}

.blue-container {
    margin: 50px;
}
body{
    font-family: Goudy Old Style ;
    font-size: 15px;
}
.blue-button {
    margin-left: 380px;

}
</style>
</head>
<body>

  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div>
  <?php endif; ?>
</div>


    <div class="col-sm-12">
        <h1 class="display-3">Teacher Details</h1>
    </div><br><br>
    <div class="container">
        <div class="col-sm-4 " >
            <form action="search" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control"/>
                    <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary active">SEARCH</button>
                    </span>
                </div>
            </form>
        </div>   
    </div><br>
    <a href="<?php echo e(route('teachers.create')); ?>" class="btn btn-success active"  style="position: absolute; right: 450px;width:200px;">ADD</a>

<div class="blue-container">
<table class="table table-striped table-dark">
  <thead>
        <tr>
        <td><b>S.NO</b></td>
        <td><b>ID</b></td>
        <td><b>NAME</b></td>
        <td><b>BOOK ID</b></td>
        <td><b>DEPARTMENT</b></td>
        <td><b>E-MAIL ID</b></td>
        <td><b> NUMBER</b></td>
        <td colspan = 4><b>ACTIONS</b></td>
        </tr>
    </thead>
    <tbody>
        <?php $sno = 1;?>
        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($sno=$sno); ?></td>
                <td><?php echo e($teacher->Teacher_ID); ?></td>
                <td><?php echo e($teacher->Name); ?></td>
                <td><?php echo e($teacher->Book_ID); ?></td>
                <td><?php echo e($teacher->Department); ?></td>
                <td><?php echo e($teacher->Email_ID); ?></td>
                <td><?php echo e($teacher->Mobile_Number); ?></td>
                <td>
                    <a href="<?php echo e(route('teachers.edit',$teacher->id)); ?>" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $sno = $sno + 1; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
</body>
</html>


<?php /**PATH D:\xampp\htdocs\TeacherEntry\resources\views/TeacherTable.blade.php ENDPATH**/ ?>