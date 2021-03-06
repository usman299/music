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

//Route::get('/', function () {
//    $message = " ";
//    return view('auth.login')->with('message',$message);
//});


Route::get('/', 'ContentController@studentLogin')->name('front.index');
Route::get('/forget/password', 'ContentController@passwordForgetCreat')->name('forget.password');
Route::get('/logout', 'ContentController@logout')->name('front.logout');
Route::get('/curent/course', 'FrontendController@curentCourse')->name('curent.course');
Route::post('/available/course', 'FrontendController@availableCourse')->name('available.course');
Route::post('/profile/update', 'FrontendController@profileUpdated')->name('profile.update');
Route::get('/acount/request', 'FrontendController@acountRequest')->name('acount.request');

Route::get('/student/view', 'FrontendController@studentIndex')->name('student.view');
Route::get('/student/detials/{c}', 'FrontendController@studentDetials')->name('students.detials');


Route::get('/coach/index', 'FrontendController@coachIndex')->name('coach.index');
Route::get('/coaches/detials/{id}/{c}', 'FrontendController@coachDetails')->name('coaches.detials');
Route::post('/sesstion/store', 'FrontendController@sesstionStore')->name('sesstion.store');
Route::post('/coach/store', 'FrontendController@coachStore')->name('coach.store');
Route::get('/coach/register', 'FrontendController@coachRegister')->name('coach.register');
Route::post('/coach/register', 'FrontendController@coachRegisterStore')->name('coach.register');
Route::post('/student/register', 'FrontendController@studentRegisterStore')->name('student.register');

Route::get('/srudent/home', 'FrontendController@index')->name('student.index');
Route::get('/notfications/', 'FrontendController@notficationsIndex')->name('notfications.index');
Route::get('/courses/', 'FrontendController@coursesIndex')->name('courses.index');

Route::post('/redeemcoupon', 'FrontendController@redeemcoupon')->name('redeemcoupon');

Route::get('/cart/reset', 'FrontendController@cartReset')->name('cart.reset');
Route::post('/addtocart', 'FrontendController@addtocart')->name('addtocart');
Route::get('/cartitems', 'FrontendController@cartitems')->name('cartitems');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout')->middleware('auth');
Route::post('/checkout/submit', 'FrontendController@checkoutSubmit')->name('checkout.submit')->middleware('auth');
Route::get('/removecart/{id}', 'FrontendController@removecart')->name('removecart');


Route::get('/front/offer/{id}', 'FrontendController@frontOffers')->name('front.offer');
Route::get('/contact', 'FrontendController@contact')->name('front.contact');
Route::get('/contact', 'FrontendController@contact')->name('front.contact');
Route::get('/checkout/offers/{id}/{price}', 'FrontendController@checkoutOffers')->name('checkout.offers');
Route::get('/pre/reservation/{id}/{price}/{key}/{discount}', 'FrontendController@preReservation')->name('front.pre.reservation');
Route::get('/reservation/{id}/{price}/{key}', 'FrontendController@reservation')->name('front.reservation');
Route::post('/reservation/store', 'FrontendController@reservationStore')->name('front.reservation.store');
Route::post('/front/reservation/store', 'FrontendController@reservationStore2')->name('reservation.store');
Route::get('/single/product/{id}', 'FrontendController@product')->name('front.product');
Route::get('/blog/view/{id}', 'FrontendController@blog')->name('blog.view');
Route::get('/products', 'FrontendController@products')->name('front.products');
Route::post('/fetchsubcategory', 'CategoryController@fetchsubcategory')->name('fetchsubcategory');
Route::post('/fetchoptions', 'CategoryController@fetchoptions')->name('fetchoptions');
Route::post('/fetchcityhome', 'CategoryController@fetchcityhome')->name('fetchcityhome');
Route::get('/admin/login', 'FrontendController@admin')->name('admin.login');

Auth::routes();
Route::get('/student', 'ContentController@studentLogin')->name('student');
//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {

Route::get('/home', 'HomeController@index')->name('home');

    Route::Post('/place/store', 'ContentController@placeStore')->name('place.store');
    Route::get('/place/index', 'ContentController@placeIndex')->name('place.index');
    Route::Post('/place/update/{id}', 'ContentController@placeUpdate')->name('place.update');
    Route::get('/place/edit/{id}', 'ContentController@placeEdit')->name('place.edit');
    Route::get('/place/delete/{id}', 'ContentController@placeDelete')->name('place.delete');

    Route::Post('/home/store', 'ContentController@homeStore')->name('home.store');
    Route::get('/home/index', 'ContentController@homeIndex')->name('home.index');
    Route::Post('/home/update/{id}', 'ContentController@homeUpdate')->name('home.update');
    Route::get('/home/edit/{id}', 'ContentController@homeEdit')->name('home.edit');
    Route::get('/home/delete/{id}', 'ContentController@homeDelete')->name('home.delete');

    Route::Post('/option/store', 'ContentController@optionStore')->name('option.store');
    Route::get('/option/index', 'ContentController@optionIndex')->name('option.index');
    Route::Post('/option/update/{id}', 'ContentController@optionUpdate')->name('option.update');
    Route::get('/option/edit/{id}', 'ContentController@optionEdit')->name('option.edit');
    Route::get('/option/delete/{id}', 'ContentController@optionDelete')->name('option.delete');

    Route::get('/general/blog', 'ContentController@blog')->name('general.blog');
Route::get('/general/blog', 'ContentController@blog')->name('general.blog');

    Route::get('/admin/offers/create', 'ContentController@offersCreate')->name('admin.offers.create');
Route::get('/admin/offers', 'ContentController@offers')->name('admin.offers');
Route::post('/admin/offers/store', 'ContentController@offersStore')->name('admin.offers.store');
Route::get('/admin/offers/edit/{id}', 'ContentController@offersEdit')->name('admin.offers.edit');
Route::post('/admin/offers/update/{id}', 'ContentController@offersUpdate')->name('admin.offers.update');
    Route::get('/admin/packges/create', 'ContentController@packgesCreate')->name('admin.packges.create');
    Route::get('/admin/packges', 'ContentController@packges')->name('admin.packges');
    Route::post('/admin/packges/store', 'ContentController@packgesStore')->name('admin.packges.store');
    Route::get('/admin/packges/edit/{id}', 'ContentController@packgesEdit')->name('admin.packges.edit');
    Route::post('/admin/packges/update/{id}', 'ContentController@packgesUpdate')->name('admin.packges.update');
Route::get('/general/settings', 'ContentController@settings')->name('general.settings');
Route::get('/general/about', 'ContentController@about')->name('general.about');
Route::get('/general/video', 'ContentController@video')->name('general.video');
Route::get('/general/mission', 'ContentController@mission')->name('general.mission');
Route::get('/general/slider', 'ContentController@slider')->name('general.slider');
Route::post('/general/settings/store', 'ContentController@settingStore')->name('settings.store');
Route::post('/slider/store', 'ContentController@sliderStore')->name('slider.store');
Route::post('/mission/store', 'ContentController@missionStore')->name('mission.store');
Route::post('/video/store', 'ContentController@videoStore')->name('video.store');
Route::post('/about/store', 'ContentController@aboutStore')->name('about.store');
Route::post('/blog/store', 'ContentController@blogStore')->name('blog.store');
Route::get('/blog/delete/{id}', 'ContentController@blogdelete')->name('blog.delete');


    Route::get('/clients/order/index', 'OrderController@clientsindex')->name('admin.clients.order.index');
    Route::get('/clients/order/complete', 'OrderController@clientscomplete')->name('admin.clients.order.complete');

    Route::get('/admin/order/index', 'OrderController@index')->name('admin.order.index');
    Route::get('/admin/reservation', 'OrderController@adminReservation')->name('admin.reservation');
    Route::get('/reservation/detials', 'OrderController@detailsReservation')->name('reservation.detials');
    Route::get('/view/reservation/detials/{id}', 'OrderController@viewDetailsReservation')->name('view.reservation.detials');
    Route::get('/reservation/detials/complete', 'OrderController@detailsReservationCompelte')->name('reservation.detials.complete');
    Route::get('/reservation/status/{id}', 'OrderController@reservationStatus')->name('reservation.status');
    Route::get('/reservation/status/{id}', 'OrderController@reservationStatus')->name('reservation.status');
    Route::get('/admin/order/complete', 'OrderController@complete')->name('admin.order.complete');
    Route::get('/admin/order/view/{id}', 'OrderController@view')->name('admin.order.view');
//pending paymant
    Route::post('/admin/pending/paymant', 'OrderController@pendingPaymant')->name('admin.pending.paymant');
    Route::get('/admin/reservation/history/{r_id}/{id}', 'OrderController@reservationHistory')->name('reservation.history');

    Route::get('/admin/order/status/{id}', 'OrderController@status')->name('admin.order.status');

    Route::get('/coupon/index', 'UserController@coupon')->name('coupon.index');
    Route::get('/coupon/delete/{id}', 'UserController@couponDelete')->name('coupon.delete');
    Route::post('/coupon/store', 'UserController@couponstore')->name('coupon.store');
    Route::get('/user/index', 'UserController@index')->name('user.index');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user/store', 'UserController@store')->name('user.store');

    Route::get('/admin/clients/index', 'UserController@clients')->name('admin.clients.index');

    Route::get('/category/index', 'CategoryController@index')->name('category.index');
    Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');

    Route::get('/subcategory/index', 'CategoryController@subcategoryindex')->name('subcategory.index');
    Route::get('/subcategory/delete/{id}', 'CategoryController@subcategorydelete')->name('subcategory.delete');
    Route::post('/subcategory/store', 'CategoryController@subcategorystore')->name('subcategory.store');

    Route::get('/product/index', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');

});
Route::post('/fetchsubcategory', 'FrontendController@fetchsubcategory')->name('fetchsubcategory');
Route::group(['middleware' => ['auth', 'web']], function() {
    Route::get('/order/index', 'FrontendController@orderDetails')->name('order.index');

    Route::get('/user/order/details/{id}', 'FrontendController@orderDetails')->name('user.order-detail');
    Route::get('/user/dashboard', 'FrontendController@userDashboard')->name('user.dashboard');
    Route::get('/user/status/{id}/{status}', 'FrontendController@userStatus')->name('user.status');
    Route::post('/user/profileupdate', 'FrontendController@profileupdate')->name('user.profileupdate');
});
