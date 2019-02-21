
plugin.tx_openimmotypo3_immobilien {
    view {
        # cat=plugin.tx_openimmotypo3_immobilien/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:openimmo/Resources/Private/Templates/
        # cat=plugin.tx_openimmotypo3_immobilien/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:openimmo/Resources/Private/Partials/
        # cat=plugin.tx_openimmotypo3_immobilien/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:openimmo/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_openimmotypo3_immobilien//a; type=string; label=Default storage PID
        storagePid = 1
    }
}
