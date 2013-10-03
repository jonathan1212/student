<?php

/**
 * StudentCourse form base class.
 *
 * @method StudentCourse getObject() Returns the current form's model object
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseStudentCourseForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'student_id'    => new sfWidgetFormPropelChoice(array('model' => 'Student', 'add_empty' => true)),
      'section'       => new sfWidgetFormInputText(),
      'course_id'     => new sfWidgetFormPropelChoice(array('model' => 'Course', 'add_empty' => true)),
      'year_level_id' => new sfWidgetFormPropelChoice(array('model' => 'YearLevel', 'add_empty' => true)),
      'school_year'   => new sfWidgetFormDateTime(),
      'is_active'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getID()), 'empty_value' => $this->getObject()->getID(), 'required' => false)),
      'student_id'    => new sfValidatorPropelChoice(array('model' => 'Student', 'column' => 'id', 'required' => false)),
      'section'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'course_id'     => new sfValidatorPropelChoice(array('model' => 'Course', 'column' => 'id', 'required' => false)),
      'year_level_id' => new sfValidatorPropelChoice(array('model' => 'YearLevel', 'column' => 'id', 'required' => false)),
      'school_year'   => new sfValidatorDateTime(array('required' => false)),
      'is_active'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('student_course[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'StudentCourse';
  }


}
