<?php

/**
 * StudentSchedule form base class.
 *
 * @method StudentSchedule getObject() Returns the current form's model object
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseStudentScheduleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'student_course_id' => new sfWidgetFormPropelChoice(array('model' => 'StudentCourse', 'add_empty' => true)),
      'day'               => new sfWidgetFormInputText(),
      'start_hour'        => new sfWidgetFormTime(),
      'end_hour'          => new sfWidgetFormTime(),
      'subject_id'        => new sfWidgetFormPropelChoice(array('model' => 'Subject', 'add_empty' => true)),
      'room_id'           => new sfWidgetFormPropelChoice(array('model' => 'Room', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getID()), 'empty_value' => $this->getObject()->getID(), 'required' => false)),
      'student_course_id' => new sfValidatorPropelChoice(array('model' => 'StudentCourse', 'column' => 'id', 'required' => false)),
      'day'               => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'start_hour'        => new sfValidatorTime(array('required' => false)),
      'end_hour'          => new sfValidatorTime(array('required' => false)),
      'subject_id'        => new sfValidatorPropelChoice(array('model' => 'Subject', 'column' => 'id', 'required' => false)),
      'room_id'           => new sfValidatorPropelChoice(array('model' => 'Room', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('student_schedule[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'StudentSchedule';
  }


}
