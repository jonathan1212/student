<?php

/**
 * StudentCourse filter form base class.
 *
 * @package    jobbet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseStudentCourseFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'student_id'    => new sfWidgetFormPropelChoice(array('model' => 'Student', 'add_empty' => true)),
      'section'       => new sfWidgetFormFilterInput(),
      'course_id'     => new sfWidgetFormPropelChoice(array('model' => 'Course', 'add_empty' => true)),
      'year_level_id' => new sfWidgetFormPropelChoice(array('model' => 'YearLevel', 'add_empty' => true)),
      'school_year'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'is_active'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'student_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Student', 'column' => 'id')),
      'section'       => new sfValidatorPass(array('required' => false)),
      'course_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Course', 'column' => 'id')),
      'year_level_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'YearLevel', 'column' => 'id')),
      'school_year'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'is_active'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('student_course_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'StudentCourse';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'student_id'    => 'ForeignKey',
      'section'       => 'Text',
      'course_id'     => 'ForeignKey',
      'year_level_id' => 'ForeignKey',
      'school_year'   => 'Date',
      'is_active'     => 'Boolean',
    );
  }
}
