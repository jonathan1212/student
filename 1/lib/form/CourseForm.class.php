<?php

/**
 * Course form.
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
class CourseForm extends BaseCourseForm
{
  public function configure()
  {
  	$this->setWidgets(array(
      'course_name' => new sfWidgetFormInputText(
    ));


    $this->widgetSchema->setNameFormat('course[%s]');

     $this->setValidators(array(
      'course_name' => new sfValidatorString(array('required' => true)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Course', 'column' => array('course_name')))
    );
  }


}
