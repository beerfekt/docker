<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        #Plugin einbinden / configuriert / welcher controller wird mit welcher action geladen?
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PanadeEdu.PdeBspPlugin',
            'Bspplugin',
            [
                'Example' => 'list'   #wird als erstes geladen , Example ist der Controller , die Action list wird geladen
            ],
            // non-cacheable actions
            [
                'Example' => 'list'  #hier nocheinmal eine liste von extensions ohne dass es gecacht wird
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    bspplugin {
                        iconIdentifier = pde_bsp_plugin-plugin-bspplugin
                        title = LLL:EXT:pde_bsp_plugin/Resources/Private/Language/locallang_db.xlf:tx_pde_bsp_plugin_bspplugin.name
                        description = LLL:EXT:pde_bsp_plugin/Resources/Private/Language/locallang_db.xlf:tx_pde_bsp_plugin_bspplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = pdebspplugin_bspplugin
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'pde_bsp_plugin-plugin-bspplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:pde_bsp_plugin/Resources/Public/Icons/user_plugin_bspplugin.svg']
			);
		
    }
);
