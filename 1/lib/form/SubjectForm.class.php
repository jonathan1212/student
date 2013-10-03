<?php

/**
 * Subject form.
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
class SubjectForm extends BaseSubjectForm
{
  public function configure()
  {

  	$this->setWidgets(array(
      'subject_name' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'subject_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

   /* $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Subject', 'column' => array('subject_name')))
    );*/

    $this->widgetSchema->setNameFormat('subject[%s]');
 //   $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }
}
