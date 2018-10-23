<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        #plugin im Backend sichtbar machen
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PanadeEdu.PdeBspPlugin',
            'Bspplugin',
            'PDE Beispiel Plugin Frontend'
        );

        #einbinden von typoscript
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('pde_bsp_plugin', 'Configuration/TypoScript', 'PanadeEdu Beispiel Plugin');

        #
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pdebspplugin_domain_model_example', 'EXT:pde_bsp_plugin/Resources/Private/Language/locallang_csh_tx_pdebspplugin_domain_model_example.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pdebspplugin_domain_model_example');

    }
);
