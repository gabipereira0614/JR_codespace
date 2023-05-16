<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/portifolio', 'Home::portifolio');
// $routes->get('/produtos', 'Home::produtos');
$routes->get('/produtos', 'Produto::index');
$routes->get('/empresa', 'Home::empresa');
$routes->get('/contato', 'Home::contato');
$routes->get('/login', 'Home::login');

$routes->get('/contato', 'Contact::Home', ['as' => 'contato']);
$routes->post('/contato', 'Contact::store', ['as' => 'contato.store']);


// login
$routes->group("admin", function($routes){
    $routes->get('','Admin\Home::index');
    $routes->post('novo','Admin\Autenticacao::salvar');
    $routes->post('logar', 'Admin\Autenticacao::logar');
    $routes->get('sair', "Admin\Autenticacao::sair");
});
// admin->produto

$routes->get('produtos','Admin\Produto::index');
$routes->post('novo','Admin\Autenticacao::salvar');
$routes->post('logar', 'Admin\Autenticacao::logar');


// produtos
$routes->get('produto', "Admin\Produto::index");
$routes->get("admin/produto/(:num)", "Admin\Produto::index/$1");
$routes->post('produto/salvar', "Admin\Produto::salvar");
$routes->get('produto/deletar/(:num)', "Admin\Produto::deletar/$1");

// Novidades
$routes->get('novidades', 'Admin\Novidades::index');

// Portifolio
$routes->get('portifolio', 'Admin\Portifolio::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
