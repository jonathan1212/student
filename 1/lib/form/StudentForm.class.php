<?php

/**
 * Student form.
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
class StudentForm extends BaseStudentForm
{
  public function configure()
  {

  	 $this->setWidgets(array(
      'student_id'    => new sfWidgetFormInputText(),
      /*'first_name'    => new sfWidgetFormInputText(),
      'last_name'     => new sfWidgetFormInputText(),
      'middle_name'   => new sfWidgetFormInputText(),
      'address'       => new sfWidgetFormTextarea(),
     // 'profile_pict'  => new sfWidgetFormInputText(),
      'date_of_birth' => new sfWidgetFormDateTime()*/
    ));

	$this->widgetSchema->setNameFormat('student[%s]');

 
    $this->setValidators(array(
      'student_id'    => new sfValidatorInteger(array('required' => false)),
     /* 'first_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'middle_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'       => new sfValidatorString(array('required' => false)),
    //  'profile_pict'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_of_birth' => new sfValidatorDateTime(array('required' => false)) */
    ));


  }

  	
/*
  public function doSave($con=null)
  {
  	if($this->isNew()){
		//$this->values['date_added'] = date('Y-m-d h:i:s');
	}
  }
  */
}
