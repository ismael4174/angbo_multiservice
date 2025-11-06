<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('articles', ArticleController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('produits', ProduitController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('type-produits', TypeProduitController::class);
    $router->resource('type-services', TypeServiceController::class);
    $router->resource('galeries', GalerieController::class);
    $router->resource('messages-contacts', MessagesContactController::class);
    $router->resource('partenaires', PartenaireController::class);
    $router->resource('sections-sites', SectionsSiteController::class);
    $router->resource('temoignages', TemoignageController::class);
    $router->resource('agences', AgenceController::class);
    $router->resource('newsletters', NewsletterController::class);

    $router->resource('caroussels', CarousselController::class);
    $router->resource('parametres-globauxes', ParametresGlobauxController::class);
    $router->resource('reseau-socials', ReseauSocialController::class);
    $router->resource('service-agences', ServiceAgenceController::class);
    $router->resource('type-carousels', TypeCarousselController::class);
});
