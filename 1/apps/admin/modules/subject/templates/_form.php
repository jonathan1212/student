<form method = "POST" action = "" enctype="multipart/form-data" >

    <?php  echo $form['subject_name']->renderLabel('Student No'); ?>
    <?php  echo $form['subject_name']->render(array('class' => 'size70 ')); ?>
    <?php  echo $form['subject_name']->renderError(); ?>

    <button> save </button>

</form>