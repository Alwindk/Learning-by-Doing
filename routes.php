<?php

/** --------------------------------------------------------------------------------------------------------
 * Add your routes here.
 * At this point, variables in a route are not supported like in Laravel: user/{user_id}/edit
 *  I add this in a future version.
 *
 * Protect your routes with one ore more Middleware classes, like WhenNotLoggedIn or Permissions.
 *  See the classes for more information.
 * Add Middleware in an associative array with a key, like the admin route
 * ---------------------------------------------------------------------------------------------------------
 */

use App\Middleware\WhenNotLoggedin as Auth;
use App\Middleware\Permissions;

$router->get('admin', 'app/Controllers/AdminController.php@index', ['auth' => Auth::class]);
$router->get('admin/pages', 'app/Controllers/AdminController.php@pages', ['auth' => Auth::class]);
$router->get('admin/articles', 'app/Controllers/AdminController.php@articles', ['auth' => Auth::class]);
$router->get('admin/media', 'app/Controllers/AdminController.php@media', ['auth' => Auth::class]);
$router->get('admin/settings', 'app/Controllers/AdminController.php@settings', ['auth' => Auth::class]);

$router->get('', 'app/Controllers/HomeController.php@index');
$router->get('home', 'app/Controllers/HomeController.php');

$router->get('', 'app/Controllers/PagesController.php@index');
$router->get('werkwijze', 'app/Controllers/PagesController.php@werkwijze');
$router->get('wie-zijn-wij', 'app/Controllers/PagesController.php@wiezijnwij');
$router->get('klantervaringen', 'app/Controllers/PagesController.php@klantervaringen');
$router->get('contact', 'app/Controllers/PagesController.php@contact');
$router->get('online-trainingsacteren', 'app/Controllers/PagesController.php@onlinetrainingsacteren');
$router->get('janneke-renkema', 'app/Controllers/PagesController.php@jannekerenkema');
$router->get('lucienne-scholten', 'app/Controllers/PagesController.php@luciennescholten');
$router->get('rollenspel', 'app/Controllers/PagesController.php@rollenspel');
$router->get('coaching', 'app/Controllers/PagesController.php@coaching');
$router->get('presentatie', 'app/Controllers/PagesController.php@presentatie');
$router->get('sollicitatie', 'app/Controllers/PagesController.php@sollicitatie');
$router->get('lastige-gesprekken', 'app/Controllers/PagesController.php@lastigegesprekken');
