<?php

declare(strict_types=1);

namespace App\Controller\Application;

/**
 * Class Application
 *
 * @package App\Application
 * @author Marcos Ortega <sparck.code@gmail.com>
 */
class Application
{
    private const BASE_PATH = 'host';

    private const PORT = 'port';

    /**
     * @param array $appConfig
     * @author Marcos Ortega <sparck.code@gmail.com>
     */
    public function init(array $appConfig): void
    {
        /** @var string $basePath */
        $basePath = $appConfig[self::BASE_PATH];
        include "app/View/template/template.phtml";
    }
}
