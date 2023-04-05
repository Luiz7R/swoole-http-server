<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ExpenseController;
use App\Http\Middlewares\AuthorizationMiddleware;
use App\Http\Middlewares\CheckUsersExistenceMiddleware;
use App\Http\Middlewares\SessionMiddleware;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->group('', function (RouteCollectorProxy $group) {

        $group->get('/', HomeController::class . ':welcome');
        $group->get('/teste/{id:[0-9]+}', HomeController::class . ':teste')->add(new AuthorizationMiddleware);

        $group->group('', function (RouteCollectorProxy $group2) {
            $group2->get('/login', LoginController::class . ':login')->setName('login');
            $group2->post('/login', LoginController::class . ':loginHandler')->setName('login-handler');

            $group2->get('/register', RegisterController::class . ':registrar')->setName('registrar');
            $group2->post('/register', RegisterController::class . ':registrarHandler')->setName('registrar-handler');

            $group2->post('/logout', LoginController::class . ':logoutHandler')->setName('logout-handler');

            $group2->post('/expense', ExpenseController::class . ':postExpense')->setName('postExpense');
            $group2->get('/expense/{id:[0-9]+}', ExpenseController::class . ':showExpense')->setName('showExpense');
            $group2->post('/expenseup', ExpenseController::class . ':updateExpense')->setName('updateExpense');
            $group2->post('/deleteExp', ExpenseController::class . ':deleteExpense')->setName('deleteExpense');

            $group2->get('/admin', AdminController::class . ':admin')
                ->setName('admin');
        })->add(new AuthorizationMiddleware);

        $group->get('/users', HomeController::class . ':showUsers')->setName('show-users');
        $group->get('/users/{id:[0-9]+}', HomeController::class . ':showUser')->add(new
        CheckUsersExistenceMiddleware)->setName('show-user');

    })->add(new SessionMiddleware);
};