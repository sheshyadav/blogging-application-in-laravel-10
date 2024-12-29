<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| <!-- Geust User Routes Start --!>
|--------------------------------------------------------------------------
*/
Route::group(['middleware' =>'guest'], function(){
    Route::controller(HomeController::class)->group(function () {
        Route::get("/", "Dashboard");
        Route::get("/category", "Category");
        Route::get("/category/{slug}", "CategoryPosts");
        Route::get("/post", "Posts");
        Route::get("/post/{slug}", "PostView");
        Route::get("/tools", "Tools");
        Route::get("/about-us", "AboutUs");
        Route::get("/contact-us", "ContactUs");
        Route::get("/privacy-policy", "PrivacyPolicy");
        Route::get("/terms-conditions", "TermsConditions");
        Route::get("/disclaimer", "Disclaimer");
        Route::get("/advertisement", "Advertisement");
        Route::Post("/website/subscriber", "WebsiteSubscriber");
        Route::get('/quick-links', "QuicklinksView");
        Route::get('/sitemap.xml', "Sitemap");
    });
});

/*
|--------------------------------------------------------------------------
| <!-- Geust User Routes End --!>
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| <!-- Admin Routes Start --!>
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>'auth'], function(){
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'AdminDashboard');
        /**----- admin profile routes -----**/
        Route::get('/admin/profile', 'AdminProfileView');
        Route::post('/admin/profile/info/update', 'AdminInfoUpdate');
        Route::post('/admin/profile/image/update', 'AdminProfileUpdate');
        Route::post('/admin/profile/social-media/update', 'AdminSocialLinkUpdate');
        Route::post('/admin/account/password/update', 'AdminUpdatePassword');
        Route::post('/admin/account/email/update', 'AdminUpdateEmail');

        /**----- category section routes -----**/
        Route::get('admin/category', 'CategoryDashboard');
        Route::get('admin/category/{catid}/post', 'CreatedPostLists');
        Route::get('admin/category/add-new', 'CategoryAddView');
        Route::post('admin/category/add-new', 'CategoryAdd');
        Route::get('admin/category/{catid}/update', 'CategoryUpdateView');
        Route::post('admin/category/{catid}/update', 'CategoryUpdate');
        Route::post('admin/category/delete', 'CategoryDelete');
        Route::post('admin/category/status', 'CategoryStatus');

        /**----- posts section routes ------**/
        Route::get('admin/post', 'PostsView');
        Route::get('admin/post/create', 'PostCreateView');
        Route::post('admin/post/create', 'CreateNewPost');
        Route::get('admin/post/{post_id}/update', 'PostUpdateView');
        Route::post('admin/post/{post_id}/update', 'PostUpdate');
        Route::post('admin/post/slug/verify', 'PostSlugVerify');
        Route::post('admin/post/status', 'PostStatus');
        Route::post('admin/post/delete', 'PostDelete');
        Route::get('admin/post/{slug}', 'PostView');

        /**------ carousel section routes ------**/
        Route::get('admin/carousel', 'CarouselDashboard');
        Route::get('admin/carousel/add-new', 'CarouselAddView');
        Route::post('admin/carousel/add-new', 'CarouselAdd');
        Route::get('admin/carousel/{id}/update', 'CarouselUpdateView');
        Route::post('admin/carousel/{id}/update', 'CarouselUpdate');
        Route::post('/admin/carousel/delete', 'CarouselDelete');
        Route::post('/admin/carousel/status', 'CarouselStatus');

        /**----- gallery manage routes -----**/
        Route::get('/admin/gallery', 'Gallery');
        Route::post('/admin/gallery/image/upload', 'GalleryImagesUpload');
        Route::post('/admin/gallery/image/delete', 'GalleryImagesDelete');

    });
});

/*
|--------------------------------------------------------------------------
| <!-- Admin Routes End --!>
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| <!-- Artisan command run url Start --!>
|--------------------------------------------------------------------------
*/
    Route::get('/cmd/artisan/{cmd}', function($cmd){
        $cmdlist = array('optimize:clear', 'migrate', 'config:clear', 'config:cache', 'route:cache', 'queue:restart', 'queue:clear');
        if(in_array($cmd, $cmdlist)){
            Artisan::call($cmd);
            print_r(Artisan::output());
        }else{ echo "No permission"; }
    });

/*
|--------------------------------------------------------------------------
| <!-- Artisan command run url End--!>
|--------------------------------------------------------------------------
*/



