<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AuthController;
use Controllers\LoginController;
use Controllers\PortadaController;
use Controllers\RegistroController;
use Controllers\RegistrarController;
use Controllers\DashboardController;
use Controllers\EventosController;
use Controllers\PonentesController;
use Controllers\RegalosController;
use Controllers\RegistradosController;
use MVC\Router;
$router = new Router();

// Login
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Crear Cuenta
$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

// Formulario de olvide mi password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// Formulario de olvide mi password
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
$router->post('/reestablecer', [LoginController::class, 'reestablecer']);

// Confirmacion de Cuenta
$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/confirmar', [LoginController::class, 'confirmar']);



// Portada
$router->get('/', [PortadaController::class, 'portada']);
$router->post('/', [PortadaController::class, 'portada']);

// Registro
$router->get('/registro', [RegistroController::class, 'registro']);
$router->post('/registro', [RegistroController::class, 'registro']);

// Api para registro
$router->get('/api/registrar', [RegistrarController::class, 'index']);
$router->post('/api/registrar', [RegistrarController::class, 'crear']);

// Area de administracion
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

$router->get('/admin/ponentes', [PonentesController::class, 'index']);
$router->get('/admin/ponentes/crear', [PonentesController::class, 'crear']);
$router->post('/admin/ponentes/crear', [PonentesController::class, 'crear']);

$router->get('/admin/eventos', [EventosController::class, 'index']);

$router->get('/admin/registrados', [RegistradosController::class, 'index']);


$router->get('/admin/regalos', [RegalosController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();