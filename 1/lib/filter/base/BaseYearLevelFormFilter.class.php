<?php

/**
 * YearLevel filter form base class.
 *
 * @package    jobbet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseYearLevelFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'year_level' => new sfWidgetFormFilterInput(),
      'semester'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'year_level' => new sfValidatorPass(array('required' => false)),
      'semester'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('year_level_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'YearLevel';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'year_level' => 'Text',
      'semester'   => 'Text',
    );
  }
}
