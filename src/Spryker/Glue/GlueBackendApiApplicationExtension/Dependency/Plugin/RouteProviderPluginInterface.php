<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin;

use Spryker\Glue\GlueBackendApiApplication\Router\Route\RouteCollection;

/**
 * Use this plugin for GlueBackendApiApplication to build RouteCollection.
 */
interface RouteProviderPluginInterface
{
    /**
     * Specification:
     * - Adds routes to the RouteCollection.
     * - Returns a RouteCollection.
     *
     * @api
     *
     * @param \Spryker\Glue\GlueBackendApiApplication\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Glue\GlueBackendApiApplication\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection;
}
