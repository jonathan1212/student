<?php

/**
 * Student form base class.
 *
 * @method Student getObject() Returns the current form's model object
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseStudentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'student_id'    => new sfWidgetFormInputText(),
      'first_name'    => new sfWidgetFormInputText(),
      'last_name'     => new sfWidgetFormInputText(),
      'middle_name'   => new sfWidgetFormInputText(),
      'address'       => new sfWidgetFormTextarea(),
      'profile_pict'  => new sfWidgetFormInputText(),
      'date_of_birth' => new sfWidgetFormDateTime(),
      'date_added'    => new sfWidgetFormDateTime(),
      'is_active'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getID()), 'empty_value' => $this->getObject()->getID(), 'required' => false)),
      'student_id'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'first_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'middle_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'       => new sfValidatorString(array('required' => false)),
      'profile_pict'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_of_birth' => new sfValidatorDateTime(array('required' => false)),
      'date_added'    => new sfValidatorDateTime(array('required' => false)),
      'is_active'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('student[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Student';
  }


}
