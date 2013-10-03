<?php

/**
 * Student filter form base class.
 *
 * @package    jobbet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseStudentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'student_id'    => new sfWidgetFormFilterInput(),
      'first_name'    => new sfWidgetFormFilterInput(),
      'last_name'     => new sfWidgetFormFilterInput(),
      'middle_name'   => new sfWidgetFormFilterInput(),
      'address'       => new sfWidgetFormFilterInput(),
      'profile_pict'  => new sfWidgetFormFilterInput(),
      'date_of_birth' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'date_added'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'is_active'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'student_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'first_name'    => new sfValidatorPass(array('required' => false)),
      'last_name'     => new sfValidatorPass(array('required' => false)),
      'middle_name'   => new sfValidatorPass(array('required' => false)),
      'address'       => new sfValidatorPass(array('required' => false)),
      'profile_pict'  => new sfValidatorPass(array('required' => false)),
      'date_of_birth' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'date_added'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'is_active'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('student_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Student';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'student_id'    => 'Number',
      'first_name'    => 'Text',
      'last_name'     => 'Text',
      'middle_name'   => 'Text',
      'address'       => 'Text',
      'profile_pict'  => 'Text',
      'date_of_birth' => 'Date',
      'date_added'    => 'Date',
      'is_active'     => 'Boolean',
    );
  }
}
