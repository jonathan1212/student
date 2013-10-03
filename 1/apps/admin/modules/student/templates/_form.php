<form method = "POST" action = "" enctype="multipart/form-data" >

    <?php  echo $form['student_id']->renderLabel('Student No'); ?>
    <?php  echo $form['student_id']->render(array('class' => 'size70 ')); ?>
    <?php  echo $form['student_id']->renderError(); ?>

    <?php // echo $form['first_name']->renderLabel('First Name'); ?>
    <?php // echo $form['first_name']->render(array('class' => 'size70 ')); ?>
    <?php // echo $form['first_name']->renderError(); ?>

    <?php // echo $form['last_name']->renderLabel('Last Name'); ?>
    <?php // echo $form['last_name']->render(array('class' => 'size70 ')); ?>
    <?php //echo $form['last_name']->renderError(); ?>


    <?php // echo $form['middle_name']->renderLabel('Middle Name'); ?>
    <?php // echo $form['middle_name']->render(array('class' => 'size70 ')); ?>
    <?php // echo $form['middle_name']->renderError(); ?> 


    <?php // echo $form['address']->renderLabel('Address'); ?>
    <?php // echo $form['address']->render(array('class' => 'size70 ')); ?>
    <?php // echo $form['address']->renderError(); ?>

     <?php // echo $form['date_of_birth']->renderLabel('Address'); ?>
    <?php // echo $form['date_of_birth']->render(array('class' => 'size70 ')); ?>
    <?php // echo $form['date_of_birth']->renderError(); ?>

    <button> save </button>

</form>