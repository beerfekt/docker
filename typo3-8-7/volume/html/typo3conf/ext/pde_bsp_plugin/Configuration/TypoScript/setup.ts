
plugin.tx_pdebspplugin_bspplugin {
    #definition von parametern:

    #view - templatepfade für fluid
    view {
        templateRootPaths.0 = EXT:pde_bsp_plugin/Resources/Private/Templates/
                             #{} klammern sind konstanden , diese werden aus constants.ts (im gleichen ordner) geladen
        templateRootPaths.1 = {$plugin.tx_pdebspplugin_bspplugin.view.templateRootPath}
        partialRootPaths.0 = EXT:pde_bsp_plugin/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_pdebspplugin_bspplugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:pde_bsp_plugin/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_pdebspplugin_bspplugin.view.layoutRootPath}
    }
    #datenbank
    persistence {
        storagePid = {$plugin.tx_pdebspplugin_bspplugin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

#CSS laden
# these classes are only used in auto-generated templates
plugin.tx_pdebspplugin._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-pde-bsp-plugin table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-pde-bsp-plugin table th {
        font-weight:bold;
    }

    .tx-pde-bsp-plugin table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
