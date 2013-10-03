<?php

/**
 * Course filter form base class.
 *
 * @package    jobbet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCourseFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'course_name' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'course_name' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('course_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Course';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'course_name' => 'Text',
    );
  }
}
