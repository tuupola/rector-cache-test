<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
        // SetList::CODE_QUALITY,
        // SetList::DEAD_CODE,
        // SetList::PRIVATIZATION,
        // SetList::NAMING,
        // SetList::TYPE_DECLARATION,
        // SetList::EARLY_RETURN,
        // SetList::TYPE_DECLARATION_STRICT,
        // PHPUnitSetList::PHPUNIT_CODE_QUALITY,
        // PHPUnitSetList::PHPUNIT_90,
        // SetList::CODING_STYLE,
    ]);
};
