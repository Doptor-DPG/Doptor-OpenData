<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use App\Middleware\AuthenticationMiddleware;
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));
    $routes->registerMiddleware('apiauth', new AuthenticationMiddleware());


    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
    //    $routes->applyMiddleware('csrf');

    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    // $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/faq', ['controller' => 'Home', 'action' => 'faq']);
    $routes->connect('/terms_of_service', ['controller' => 'Home', 'action' => 'termsofservice']);
    $routes->connect('/privacy_policy', ['controller' => 'Home', 'action' => 'privacypolicy']);
    $routes->connect('/documentation/v1', ['controller' => 'Documentation', 'action' => 'index']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *
     * ```
     * $routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);
     * $routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);
     * ```
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});
Router::scope('/api', function ($routes) {
    /*
     * Ministry, Layer, Origin, Office based API
     */
    $routes->post('/v1/ministries/', ['controller' => 'OfficeMinistries', 'action' => 'getMinistry']);
    $routes->post('/v1/ministry/layers/', ['controller' => 'OfficeLayers', 'action' => 'getLayerByMinistry']);
    $routes->post('/v1/ministry/layer/offices/', ['controller' => 'OfficeLayers', 'action' => 'getAllOfficesByMinistryAndLayer']);

    /*
     * Office Unit Designation Based API
     */
    $routes->post('/v1/offices/', ['controller' => 'Offices', 'action' => 'getOffice']);
    $routes->post('/v1/office/units', ['controller' => 'Offices', 'action' => 'getOfficeWiseUnit']);
    $routes->post('/v1/office/unit/designations', ['controller' => 'Offices', 'action' => 'getUnitWiseDesignation']);
    $routes->post('/v1/office/unit-designation-map', ['controller' => 'Offices', 'action' => 'getOfficeWiseUnitDesigMap']);
    $routes->post('/v1/office/unit-designation-employee-map', ['controller' => 'Offices', 'action' => 'getOfficeWiseUnitDesignationEmployeeMap']);
    $routes->post('/v1/offices/relation-offices', ['controller' => 'Offices', 'action' => 'getOfficeBasedRelationalData']);

    /*
     * Office Origin Base API
     */
    $routes->post('/v1/office-origins/', ['controller' => 'OfficeOrigins', 'action' => 'getOfficeOrigin']);


    /*
     * Office Unit Head and Admin API
     */
    $routes->post('/v1/office/head-and-admin', ['controller' => 'Offices', 'action' => 'getOfficeHeadAndAdmin']);

    /*
     * Office Unit Head and Admin API
     */
    $routes->post('/v1/office/unit-head-and-admin', ['controller' => 'Offices', 'action' => 'getOfficeUnitHeadAndAdmin']);

    /*
     * Special Designation API
     */
    $routes->post('/v1/office/special-designations', ['controller' => 'Offices', 'action' => 'getOfficeSpecialDesignations']);


    $routes->post('/v1/get-employee-list-by-office', ['controller' => 'Offices', 'action' => 'getEmployeeListByOffice']);

    $routes->post('/v1/office/front-desk', ['controller' => 'OfficeFrontDesk', 'action' => 'getOfficeFrontDesk']);


    /*
     * Geo based API
     */
    $routes->post('/v1/geo/divisions', ['controller' => 'GeoDivisions', 'action' => 'getV1Division']);
    $routes->post('/v1/geo/districts', ['controller' => 'GeoDistricts', 'action' => 'getV1District']);
    $routes->post('/v1/geo/upazillas', ['controller' => 'GeoUpazilas', 'action' => 'getV1Upazilla']);
    $routes->post('/v1/geo/unions', ['controller' => 'GeoUnions', 'action' => 'getV1Union']);
    $routes->post('/v1/geo/city-corporations', ['controller' => 'GeoCityCorporations', 'action' => 'getCityCorporation']);
    $routes->post('/v1/geo/city-corporation-wards', ['controller' => 'GeoCityCorporationWards', 'action' => 'getCityCorporationWard']);
    $routes->post('/v1/geo/municipalities', ['controller' => 'GeoMunicipalities', 'action' => 'getMunicipality']);
    $routes->post('/v1/geo/municipality-wards', ['controller' => 'GeoMunicipalityWards', 'action' => 'getMunicipalityWard']);
    $routes->post('/v1/geo/post-offices', ['controller' => 'GeoPostOffices', 'action' => 'getPostOffice']);
    $routes->post('/v1/geo/thanas', ['controller' => 'GeoThanas', 'action' => 'getThana']);
});

Router::scope('/api', function ($routes) {

});
Router::scope('/', function ($routes) {
});
/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
