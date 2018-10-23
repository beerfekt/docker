
plugin.tx_pdebspplugin_bspplugin {
    view {
        # cat=plugin.tx_pdebspplugin_bspplugin/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:pde_bsp_plugin/Resources/Private/Templates/
        # cat=plugin.tx_pdebspplugin_bspplugin/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:pde_bsp_plugin/Resources/Private/Partials/
        # cat=plugin.tx_pdebspplugin_bspplugin/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:pde_bsp_plugin/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pdebspplugin_bspplugin//a; type=string; label=Default storage PID
        storagePid =
    }
}
