<?php

/**
 * YearLevel form base class.
 *
 * @method YearLevel getObject() Returns the current form's model object
 *
 * @package    jobbet
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseYearLevelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'year_level' => new sfWidgetFormInputText(),
      'semester'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getID()), 'empty_value' => $this->getObject()->getID(), 'required' => false)),
      'year_level' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'semester'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('year_level[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'YearLevel';
  }


}
