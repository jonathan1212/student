<form method = "POST" action = "" enctype="multipart/form-data" >

    <?php  echo $form['course_name']->renderLabel('Name'); ?>
    <?php  echo $form['course_name']->render(array('class' => 'size70 ')); ?>
    <?php  echo $form['course_name']->renderError(); ?>

     <?php echo $form->renderHiddenFields(); ?>
     
    <button> save </button>

</form>