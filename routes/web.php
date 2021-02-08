<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], static function () {

    Route::group([/*'middleware' => 'guest'*/], static function () {

        /* Authentication */
        Route::get('authentication', static function () { return redirect()->route('admin.authentication.login'); });
        Route::get('authentication/login', ['uses' => 'AuthenticationController@login', 'as' => 'authentication.login']);
        Route::get('authentication/register', ['uses' => 'AuthenticationController@register', 'as' => 'authentication.register']);
        Route::get('authentication/lockscreen', ['uses' => 'AuthenticationController@lockscreen', 'as' => 'authentication.lockscreen']);
        Route::get('authentication/forgot', ['uses' => 'AuthenticationController@forgot', 'as' => 'authentication.forgot']);
        Route::get('authentication/page404', ['uses' => 'AuthenticationController@page404', 'as' => 'authentication.page404']);
        Route::get('authentication/page500', ['uses' => 'AuthenticationController@page500', 'as' => 'authentication.page500']);
        Route::get('authentication/offline', ['uses' => 'AuthenticationController@offline', 'as' => 'authentication.offline']);
    });

    Route::group([/*'middleware' => 'auth'*/], static function () {

        Route::get('/', static function () { return redirect()->route('admin.dashboard.index'); });

        /* General Settings */
        Route::get('/general-settings', static function () { return redirect()->route('admin.general-settings.index'); });
        Route::get('/general-settings/index', ['uses' => 'GeneralSettingController@index', 'as' => 'general-settings.index']);
        Route::post('/general-settings/index', ['uses' => 'GeneralSettingController@updateContent']);

        /* Dashboard */
        Route::get('dashboard', static function () { return redirect()->route('admin.dashboard.index'); });
        Route::get('dashboard/index', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);

        /* Profile */
        Route::get('profile', static function () { return redirect()->route('admin.profile.my-profile'); });
        Route::get('profile/my-profile', ['uses' => 'ProfileController@myProfile', 'as' => 'profile.my-profile']);

        /* App */
        Route::get('app', static function () { return redirect()->route('admin.app.inbox'); });
        Route::get('app/inbox', ['uses' => 'AppController@inbox', 'as' => 'app.inbox']);
        Route::get('app/compose', ['uses' => 'AppController@compose', 'as' => 'app.compose']);
        Route::get('app/single', ['uses' => 'AppController@single', 'as' => 'app.single']);
        Route::get('app/chat', ['uses' => 'AppController@chat', 'as' => 'app.chat']);
        Route::get('app/calendar', ['uses' => 'AppController@calendar', 'as' => 'app.calendar']);
        Route::get('app/contact-list', ['uses' => 'AppController@contactList', 'as' => 'app.contact-list']);

        /* Project */
        Route::get('project', static function () { return redirect()->route('admin.project.project-list'); });
        Route::get('project/project-list', ['uses' => 'ProjectController@projectList', 'as' => 'project.project-list']);
        Route::get('project/taskboard', ['uses' => 'ProjectController@taskboard', 'as' => 'project.taskboard']);
        Route::get('project/ticket-list', ['uses' => 'ProjectController@ticketList', 'as' => 'project.ticket-list']);
        Route::get('project/ticket-detail', ['uses' => 'ProjectController@ticketDetail', 'as' => 'project.ticket-detail']);

        /* File Manager */
        Route::get('file-manager', static function () { return redirect()->route('admin.file-manager.all'); });
        Route::get('file-manager/all', ['uses' => 'FileManagerController@all', 'as' => 'file-manager.all']);
        Route::get('file-manager/documents', ['uses' => 'FileManagerController@documents', 'as' => 'file-manager.documents']);
        Route::get('file-manager/media', ['uses' => 'FileManagerController@media', 'as' => 'file-manager.media']);
        Route::get('file-manager/image', ['uses' => 'FileManagerController@image', 'as' => 'file-manager.image']);

        /* Blog */
        Route::get('blog', static function () { return redirect()->route('admin.blog.dashboard'); });
        Route::get('blog/dashboard', ['uses' => 'BlogController@dashboard', 'as' => 'blog.dashboard']);
        Route::get('blog/new-post', ['uses' => 'BlogController@newPost', 'as' => 'blog.new-post']);
        Route::get('blog/list', ['uses' => 'BlogController@list', 'as' => 'blog.list']);
        Route::get('blog/grid', ['uses' => 'BlogController@grid', 'as' => 'blog.grid']);
        Route::get('blog/detail', ['uses' => 'BlogController@detail', 'as' => 'blog.detail']);

        /* Ecommerce */
        Route::get('ecommerce', static function () { return redirect()->route('admin.ecommerce.dashboard'); });
        Route::get('ecommerce/dashboard', ['uses' => 'EcommerceController@dashboard', 'as' => 'ecommerce.dashboard']);
        Route::get('ecommerce/product', ['uses' => 'EcommerceController@product', 'as' => 'ecommerce.product']);
        Route::get('ecommerce/product-list', ['uses' => 'EcommerceController@productList', 'as' => 'ecommerce.product-list']);
        Route::get('ecommerce/product-detail', ['uses' => 'EcommerceController@productDetail', 'as' => 'ecommerce.product-detail']);

        /* components */
        Route::get('components', static function () { return redirect()->route('admin.components.ui'); });
        Route::get('components/ui', ['uses' => 'ComponentsController@ui', 'as' => 'components.ui']);
        Route::get('components/alerts', ['uses' => 'ComponentsController@alerts', 'as' => 'components.alerts']);
        Route::get('components/collapse', ['uses' => 'ComponentsController@collapse', 'as' => 'components.collapse']);
        Route::get('components/colors', ['uses' => 'ComponentsController@colors', 'as' => 'components.colors']);
        Route::get('components/dialogs', ['uses' => 'ComponentsController@dialogs', 'as' => 'components.dialogs']);
        Route::get('components/list', ['uses' => 'ComponentsController@list', 'as' => 'components.list']);
        Route::get('components/media', ['uses' => 'ComponentsController@media', 'as' => 'components.media']);
        Route::get('components/modals', ['uses' => 'ComponentsController@modals', 'as' => 'components.modals']);
        Route::get('components/notifications', ['uses' => 'ComponentsController@notifications', 'as' => 'components.notifications']);
        Route::get('components/progressbars', ['uses' => 'ComponentsController@progressbars', 'as' => 'components.progressbars']);
        Route::get('components/range', ['uses' => 'ComponentsController@range', 'as' => 'components.range']);
        Route::get('components/sortable', ['uses' => 'ComponentsController@sortable', 'as' => 'components.sortable']);
        Route::get('components/tabs', ['uses' => 'ComponentsController@tabs', 'as' => 'components.tabs']);
        Route::get('components/waves', ['uses' => 'ComponentsController@waves', 'as' => 'components.waves']);

        /* Font Icons */
        Route::get('icons', static function () { return redirect()->route('admin.icons.material'); });
        Route::get('icons/material', ['uses' => 'IconsController@material', 'as' => 'icons.material']);
        Route::get('icons/themify', ['uses' => 'IconsController@themify', 'as' => 'icons.themify']);
        Route::get('icons/weather', ['uses' => 'IconsController@weather', 'as' => 'icons.weather']);

        /* Form */
        Route::get('form', static function () { return redirect()->route('admin.form.basic'); });
        Route::get('form/basic', ['uses' => 'FormController@basic', 'as' => 'form.basic']);
        Route::get('form/advanced', ['uses' => 'FormController@advanced', 'as' => 'form.advanced']);
        Route::get('form/examples', ['uses' => 'FormController@examples', 'as' => 'form.examples']);
        Route::get('form/validation', ['uses' => 'FormController@validation', 'as' => 'form.validation']);
        Route::get('form/wizard', ['uses' => 'FormController@wizard', 'as' => 'form.wizard']);
        Route::get('form/editors', ['uses' => 'FormController@editors', 'as' => 'form.editors']);
        Route::get('form/upload', ['uses' => 'FormController@upload', 'as' => 'form.upload']);
        Route::get('form/summernote', ['uses' => 'FormController@summernote', 'as' => 'form.summernote']);

        /* Tables */
        Route::get('tables', static function () { return redirect()->route('admin.tables.normal'); });
        Route::get('tables/normal', ['uses' => 'TablesController@normal', 'as' => 'tables.normal']);
        Route::get('tables/datatable', ['uses' => 'TablesController@datatable', 'as' => 'tables.datatable']);
        Route::get('tables/editable', ['uses' => 'TablesController@editable', 'as' => 'tables.editable']);
        Route::get('tables/footable', ['uses' => 'TablesController@footable', 'as' => 'tables.footable']);
        Route::get('tables/color', ['uses' => 'TablesController@color', 'as' => 'tables.color']);

        /* Chart */
        Route::get('chart', static function () { return redirect()->route('admin.chart.echarts'); });
        Route::get('chart/echarts', ['uses' => 'ChartController@echarts', 'as' => 'chart.echarts']);
        Route::get('chart/c3', ['uses' => 'ChartController@c3', 'as' => 'chart.c3']);
        Route::get('chart/morris', ['uses' => 'ChartController@morris', 'as' => 'chart.morris']);
        Route::get('chart/flot', ['uses' => 'ChartController@flot', 'as' => 'chart.flot']);
        Route::get('chart/chartjs', ['uses' => 'ChartController@chartjs', 'as' => 'chart.chartjs']);
        Route::get('chart/sparkline', ['uses' => 'ChartController@sparkline', 'as' => 'chart.sparkline']);
        Route::get('chart/knob', ['uses' => 'ChartController@knob', 'as' => 'chart.knob']);

        /* Widgets */
        Route::get('widgets', static function () { return redirect()->route('admin.widgets.app'); });
        Route::get('widgets/app', ['uses' => 'WidgetsController@app', 'as' => 'widgets.app']);
        Route::get('widgets/data', ['uses' => 'WidgetsController@data', 'as' => 'widgets.data']);

        /* Pages */
        Route::get('pages', static function () { return redirect()->route('admin.pages.blank'); });
        Route::get('pages/blank', ['uses' => 'PagesController@blank', 'as' => 'pages.blank']);
        Route::get('pages/gallery', ['uses' => 'PagesController@gallery', 'as' => 'pages.gallery']);
        Route::get('pages/invoices1', ['uses' => 'PagesController@invoices1', 'as' => 'pages.invoices1']);
        Route::get('pages/invoices2', ['uses' => 'PagesController@invoices2', 'as' => 'pages.invoices2']);
        Route::get('pages/pricing', ['uses' => 'PagesController@pricing', 'as' => 'pages.pricing']);
        Route::get('pages/profile', ['uses' => 'PagesController@profile', 'as' => 'pages.profile']);
        Route::get('pages/search', ['uses' => 'PagesController@search', 'as' => 'pages.search']);
        Route::get('pages/timeline', ['uses' => 'PagesController@timeline', 'as' => 'pages.timeline']);

        /* Maps */
        Route::get('map', static function () { return redirect()->route('admin.map.yandex'); });
        Route::get('map/yandex', ['uses' => 'MapController@yandex', 'as' => 'map.yandex']);
        Route::get('map/jvector', ['uses' => 'MapController@jvector', 'as' => 'map.jvector']);
    });
});
