<?php

/**
 * subject actions.
 *
 * @package    jobbet
 * @subpackage subject
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class subjectActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $student = SubjectPeer::doSelect(new Criteria);

    $this->pager = new GaPager($student, 10);
    $this->pager->setPage($request->getParameter('page', 1));
  }

  public function executeCreate(sfWebRequest $request)
  {
  	$this->form = new SubjectForm;

  	if ($request->isMethod('POST')) {
        $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
        if ($this->form->isValid()){
            $this->form->save();
            $this->getUser()->setFlash('success', 'Successfully uploaded.');
        }
        else{
            $this->getUser()->setFlash('error', 'error.');
       
        }
      }  

  }
}
