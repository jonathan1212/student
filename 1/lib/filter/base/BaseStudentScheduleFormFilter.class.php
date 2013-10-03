<?php

/**
 * StudentSchedule filter form base class.
 *
 * @package    jobbet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseStudentScheduleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'student_course_id' => new sfWidgetFormPropelChoice(array('model' => 'StudentCourse', 'add_empty' => true)),
      'day'               => new sfWidgetFormFilterInput(),
      'start_hour'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_hour'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'subject_id'        => new sfWidgetFormPropelChoice(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'model' => 'Subject', 'add_empty' => true)),
      'room_id'           => new sfWidgetFormPropelChoice(array('model' => 'Room', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'student_course_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'StudentCourse', 'column' => 'id')),
      'day'               => new sfValidatorPass(array('required' => false)),
      'start_hour'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'end_hour'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'subject_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Subject', 'column' => 'id')),
      'room_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Room', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('student_schedule_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'StudentSchedule';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'student_course_id' => 'ForeignKey',
      'day'               => 'Text',
      'start_hour'        => 'Date',
      'end_hour'          => 'Date',
      'subject_id'        => 'ForeignKey',
      'room_id'           => 'ForeignKey',
    );
  }
}
