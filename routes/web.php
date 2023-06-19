<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\ProductDetailsController;

use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AppPrivacyPolicyController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WhyChooseController;

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

Auth::routes();

// FRONTEND 
Route::get('/', [HomeController::class, 'index']);
Route::get('/frontEnd/serviceDetails/{id}', [HomeController::class, 'serviceDetails']);
Route::get('/frontEnd/news', [HomeController::class, 'news']);
Route::get('/frontEnd/newsDetails/{id}', [HomeController::class, 'newsDetails']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/allGallery', [HomeController::class, 'allGallery']);
Route::get('/categoryWiseAllImage/{id}', [HomeController::class, 'categoryWiseAllImage']);
Route::get('/frontEnd/productDetails/{id}', [ProductDetailsController::class, 'index']);
Route::get('/frontEnd/ecommerce/', [ProductDetailsController::class, 'ecommerce']);

// USER
// Route::get('/user/index', [UserController::class, 'index']);
Route::get('/admin', [UserController::class, 'admin']);

// AUTH
Route::get('/admin', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/sendMail', [ForgotPasswordController::class, 'postEmail']);

// ADMIN
Route::get('/home', [AdminController::class, 'adminDashBoard']);

// ABOUT
Route::get('/adminAboutPageEditor', [AboutController::class, 'adminAboutPageEditor']);
Route::post('/addBackGroundAbout', [AboutController::class, 'addBackGroundAbout']);
Route::post('/deleteBackgroundImageAbout', [AboutController::class, 'deleteBackgroundImageAbout']);
Route::post('/firstSectionContentsOfAbout', [AboutController::class, 'firstSectionContentsOfAbout']);
Route::post('/aboutDeletePostSectionOne', [AboutController::class, 'aboutDeletePostSectionOne']);
Route::post('/aboutSectionOneContentsEditView', [AboutController::class, 'aboutSectionOneContentsEditView']);
Route::post('/editFirstSectionContentsOfAbout', [AboutController::class, 'editFirstSectionContentsOfAbout']);

// SERVICE
Route::get('/adminServicePageEditor', [ServiceController::class, 'servicePageEditor']);
Route::post('/admin/saveService', [ServiceController::class, 'saveService']);
Route::post('/editServiceDetails', [ServiceController::class, 'editServiceDetails']);
Route::post('/deleteServiceDetails', [ServiceController::class, 'deleteServiceDetails']);
Route::get('/admin/activeService/{id}', [ServiceController::class, 'activeService']);
Route::get('/admin/InactiveService/{id}', [ServiceController::class, 'inactiveService']);

// GALLERY
Route::get('/adminGalleryPageEditor', [GalleryController::class, 'adminGalleryPageEditor']);
Route::post('/admin/saveGalleryImageType', [GalleryController::class, 'saveGalleryImageType']);
Route::post('/editGalleryImageType', [GalleryController::class, 'editGalleryImageType']);
Route::post('/deleteGalleryDetails', [GalleryController::class, 'deleteGalleryDetails']);
Route::get('/admin/activeGallery/{id}', [GalleryController::class, 'activeGallery']);
Route::get('/admin/InactiveGallery/{id}', [GalleryController::class, 'inactiveGallery']);
Route::get('/adminGalleryImageTypePageEditor', [GalleryController::class, 'adminGalleryImageTypePageEditor']);
Route::post('/admin/saveGallery', [GalleryController::class, 'saveGallery']);
Route::post('/editGalleryDetails', [GalleryController::class, 'editGalleryDetails']);
Route::post('/deleteGalleryDetails', [GalleryController::class, 'deleteGalleryDetails']);
Route::get('/admin/activeGallery/{id}', [GalleryController::class, 'activeGallery']);
Route::get('/admin/InactiveGallery/{id}', [GalleryController::class, 'inactiveGallery']);

// NEWS
Route::get('/createNews', [NewsController::class, 'createNews']);
Route::post('/admin/saveNews', [NewsController::class, 'saveNews']);
Route::post('/editNews', [NewsController::class, 'editNews']);
Route::post('/deleteNews', [NewsController::class, 'deleteNews']);
Route::get('/activeNews/{id}', [NewsController::class, 'activeNews']);
Route::get('/inactiveNews/{id}', [NewsController::class, 'inactiveNews']);

// WHY US
Route::get('/admin/createWhyChooseUs', [WhyChooseController::class, 'createWhyChooseUs']);
Route::get('/admin/deleteWhyChooseUs/{id}', [WhyChooseController::class, 'deleteWhyChooseUs']);
Route::post('/admin/saveWhyChooseUs', [WhyChooseController::class, 'saveWhyChooseUs']);
Route::post('/admin/editWhyChooseUsDetails', [WhyChooseController::class, 'editWhyChooseUsDetails']);

// PRODUCTS
Route::get('/admin/createProduct', [ProductController::class, 'createProduct']);
Route::post('/admin/saveProduct', [ProductController::class, 'saveProduct']);
Route::post('/admin/editProductDetails', [ProductController::class, 'editProductDetails']);
Route::post('/admin/deleteProductDetails', [ProductController::class, 'deleteProductDetails']);
Route::get('/admin/activeProduct/{id}', [ProductController::class, 'activeProduct']);
Route::get('/admin/InactiveProduct/{id}', [ProductController::class, 'inActiveProduct']);

// CLIENTS
Route::get('/admin/createClient', [ClientsController::class, 'createClient']);
Route::post('/admin/saveClient', [ClientsController::class, 'saveClient']);
Route::post('/admin/editClientDetails', [ClientsController::class, 'editClientDetails']);
Route::post('/admin/deleteClientDetails', [ClientsController::class, 'deleteClientDetails']);
Route::get('/admin/activeClient/{id}', [ClientsController::class, 'activeClient']);
Route::get('/admin/InactiveClient/{id}', [ClientsController::class, 'inActiveClient']);

// POLICY
Route::get('/admin/ManageAppPrivacyPolicy', [AppPrivacyPolicyController::class, 'indexApp'])->name('app.manage');
Route::get('/admin/createAppPrivacyPolicy', [AppPrivacyPolicyController::class, 'createApp'])->name('app.create');
Route::post('/admin/saveAppPrivacyPolicy', [AppPrivacyPolicyController::class, 'saveApp']);
Route::get('/admin/editAppPrivacyPolicy/{id}', [AppPrivacyPolicyController::class, 'editApp'])->name('app.edit');
Route::post('/admin/updateAppPrivacyPolicy/{id}', [AppPrivacyPolicyController::class, 'updateApp'])->name('app.update');
Route::post('/admin/deleteAppDetails', [AppPrivacyPolicyController::class, 'deleteAppDetails']);

// CONTACT
Route::get('/adminContactPageEditor', [ContactController::class, 'adminContactPageEditor']);
Route::post('/addBackGroundContact', [ContactController::class, 'addBackGroundContact']);
Route::post('/addContactInfos', [ContactController::class, 'addContactInfos']);