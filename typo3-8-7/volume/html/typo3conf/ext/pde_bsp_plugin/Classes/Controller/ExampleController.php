<?php
namespace PanadeEdu\PdeBspPlugin\Controller;
               # nach Plugin-name (PdeBspPlugin) weiß er automatisch dass er in classes ist, daher nicht im pfad angegeben

/***
 *
 * This file is part of the "PanadeEdu Beispiel Plugin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Christoph Beer <cbeer@schirra-it.de>, Schirra-IT
 *
 ***/

/**
 * ExampleController
 */
                                      #
class ExampleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */


    public function listAction()
    {
        #er will alle elemente aus dem remote-repository haben, kann man erstmal wegnehmen
        #$examples = $this->exampleRepository->findAll();
        $this->view->assign('examples', $examples);
    }
}
