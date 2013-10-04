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
      'first_name'    => new sfWidgetFormInputText(),
      'last_name'     => new sfWidgetFormInputText(),
      'middle_name'   => new sfWidgetFormInputText(),
      'address'       => new sfWidgetFormTextarea(),
      'profile_pict'  => new sfWidgetFormInputFile(),
      'date_of_birth' => new sfWidgetFormInputText()
    ));

	$this->widgetSchema->setNameFormat('student[%s]');

    $photoMessages = array(
            'mime_types'        => 'File must be of .jpg, .png, and .gif format.'//,
    );
 
    $this->setValidators(array(
      'student_id'    => new sfValidatorInteger(array('required' => false)),
      'first_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'middle_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'       => new sfValidatorString(array('required' => false)),
      'profile_pict' => new sfValidatorFile(
            array(
                'mime_types'           => array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png'),
                'required'             => false,
                'path'                 => sfConfig::get('sf_upload_dir').'/profile_pict',
                'validated_file_class' => 'GaAuthorImageValidatedFile'
            ), $photoMessages
            
        ),
      'dateCreated'   => new sfValidatorDate(array('required' => false))
    ));


  }

  	

  public function doSave($con=null)
  {
  	if($this->isNew()){
		$this->values['date_added'] = date('Y-m-d h:i:s');
	}
  }

}
