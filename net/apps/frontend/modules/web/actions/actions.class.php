<?php

/**
 * web actions.
 *
 * @package    monitoring
 * @subpackage web
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class webActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }

  public function executeAccountInfo(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }

  public function executeAddImageMultiselectModal(sfWebRequest $request)
  {
  	$this->setLayout('modalLayout');
  }


  public function executeAllListing(sfWebRequest $request)
  {

  }

  public function executeAllListingArchives(sfWebRequest $request)
  {

  }

  public function executeAllListingDrafts(sfWebRequest $request)
  {

  }
  public function executeBlogCreateEdit(sfWebRequest $request)
  {

  }

  public function executeBlogDrafts(sfWebRequest $request)
  {

  }

  public function executeBlogImportImportedalready(sfWebRequest $request)
  {

  }
  public function executeBlogImportNotYetImported(sfWebRequest $request)
  {

  }

  public function executeBlogIndex(sfWebRequest $request)
  {

  }

  public function executeContactAdd(sfWebRequest $request)
  {

  }

  public function executeContactList(sfWebRequest $request)
  {

  }

  public function executeEditListingAddMedia(sfWebRequest $request)
  {

  }
  
  public function executeFormMultiselect(sfWebRequest $request)
  {

  }
  public function executeFormMultiselect2(sfWebRequest $request)
  {

  }
  public function executeForms(sfWebRequest $request)
  {

  }
  public function executeGanetNotactivated(sfWebRequest $request)
  {

  }
  public function executeGanet(sfWebRequest $request)
  {

  }
  public function executeKbaseHomeSearchresults(sfWebRequest $request)
  {

  }
  public function executeKbaseHomeSection(sfWebRequest $request)
  {

  }
  public function executeKbaseHome(sfWebRequest $request)
  {

  }
  public function executeLayout2(sfWebRequest $request)
  {

  }
  public function executeLayoutv2Viewalllistings(sfWebRequest $request)
  {

  }
  public function executeLayoutv2Viewlistingarchives(sfWebRequest $request)
  {

  }
  public function executeLayoutv2Viewlistingdrafts(sfWebRequest $request)
  {

  }
  public function executeLayoutv2(sfWebRequest $request)
  {

  }
  public function executeListingcreate(sfWebRequest $request)
  {

  }
  public function executeListingedit(sfWebRequest $request)
  {

  }
  public function executeLISTINGUItable(sfWebRequest $request)
  {

  }
  public function executeMediaDefaultview(sfWebRequest $request)
  {

  }
  public function executeMediaViewAll(sfWebRequest $request)
  {

  }
  public function executeMultiformselect(sfWebRequest $request)
  {

  }

  public function executeOldCfm(sfWebRequest $request)
  {

  }
  public function executePopupmediaAdd(sfWebRequest $request)
  {

  }
  public function executePopup(sfWebRequest $request)
  {

  }
  public function executePrintinvoice(sfWebRequest $request)
  {

  }
  public function executeTables(sfWebRequest $request)
  {

  }
  public function executeTypo(sfWebRequest $request)
  {

  }
  

}
