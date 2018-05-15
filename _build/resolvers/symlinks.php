<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/setCom/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/setcom')) {
            $cache->deleteTree(
                $dev . 'assets/components/setcom/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/setcom/', $dev . 'assets/components/setcom');
        }
        if (!is_link($dev . 'core/components/setcom')) {
            $cache->deleteTree(
                $dev . 'core/components/setcom/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/setcom/', $dev . 'core/components/setcom');
        }
    }
}

return true;