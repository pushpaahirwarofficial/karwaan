<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Mainuser::index');
$routes->get('/home', 'Mainuser::index');
$routes->get('/About/getAbout', 'About::index');
$routes->get('/artist/getArtist', 'Artist::index'); 
$routes->post('/artist/getDetail/(:num)', 'Artist::editProfileByID/$1');  
$routes->get('/testimonial/getTestimonial', 'Testimonial::index'); 
$routes->get('/event/getEvent', 'Event::index');
$routes->get('/Tevents/events', 'Tevents::events');
$routes->get('/Tevents/event/(:any)', 'Tevents::event/$1');
$routes->get('/gallery/getGallery', 'Gallery::index');
$routes->post('/gallery/getAlbum/(:any)', 'Gallery::album/$1'); 
$routes->post('/gallery/getAlbum/viewImage/(:any)', 'Gallery::image/$1');     
$routes->get('/youtube/getYouTube', 'Youtube::index');
$routes->get('/youtube/getvideo/(:any)', 'Youtube::singleVideo/$1');
$routes->get('/achievement/getachievement', 'Achievement::index');

$routes->get('/blogs/getblogs', 'Blog::index');
$routes->get('/blogs/blog_view_desc/(:any)', 'Blog::getSingleBlogDesc/$1');
$routes->post('/blogs/add_comment/(:any)', 'Blog::addComment/$1');

$routes->post('/blogs/blogview/(:any)', 'Blog::getSingleBlog/$1');
$routes->post('/blogs/insert_comment', 'Blog::insertComment');
//$routes->post('/blogs/add_like/(:any)', 'Blog::addLike/$1');

$routes->get('/contact/getContact', 'Contact::index');
$routes->post('/contact/sendmsg', 'Contact::contactUs');
$routes->post('/stay_in_touch/sendemail', 'StayTouch::insertEmail');

$routes->add('admin/admin_initial', 'admin\Login::initial');
$routes->post('admin/admin_signin', 'admin\Login::signin');
$routes->get('admin_index', 'admin\Index::index');
$routes->get('admin_logout', 'admin\Login::logout');

$routes->get('slider/getData_slider', 'admin\Slider::index');
$routes->get('slider/view_slider/(:num)', 'admin\Slider::viewSlider/$1');
$routes->get('slider/add_Slider', 'admin\Slider::addSlider');
$routes->post('slider/insert_Slider', 'admin\Slider::insertSlider');
$routes->DELETE('slider/delete_slider/(:num)', 'admin\Slider::deleteSlider/$1');
$routes->get('slider/edit_slider/(:num)', 'admin\Slider::editSlider/$1');
$routes->post('slider/update_slider/(:num)', 'admin\Slider::updateSlider/$1'); 
$routes->post('slider/update_slider_image/(:num)', 'admin\Slider::updateSliderImage/$1'); 

$routes->get('achievement/getData_achievement', 'admin\Achievement::index');
$routes->get('achievement/view_achievement/(:num)', 'admin\Achievement::achievementView/$1');
$routes->get('achievement/add_achievement', 'admin\Achievement::addAchievement');
$routes->post('achievement/insert_achievement', 'admin\Achievement::insertAchievement');
$routes->DELETE('achievement/delete_achievement/(:num)', 'admin\Achievement::deleteAchievement/$1');
$routes->get('achievement/edit_achievement/(:num)', 'admin\Achievement::editAchievement/$1');
$routes->post('achievement/update_achievement/(:num)', 'admin\Achievement::updateAchievement/$1');
$routes->post('achievement/update_achievement_image/(:num)', 'admin\Achievement::updateAchievementImage/$1');

$routes->get('artist/getData_artist', 'admin\Artist::index');
$routes->get('artist/view_artist/(:num)', 'admin\Artist::artistView/$1');
$routes->get('artist/add_artist', 'admin\Artist::addArtist');
$routes->post('artist/insert_artist', 'admin\Artist::insertArtist');
$routes->post('artist/insert_artistData', 'admin\Artist::insertArtistDB');
$routes->DELETE('artist/delete_artist/(:num)', 'admin\Artist::deleteArtist/$1');
$routes->get('artist/edit_artist/(:num)', 'admin\Artist::editArtist/$1');
$routes->post('artist/update_artist/(:num)', 'admin\Artist::updateArtist/$1');
$routes->post('artist/update_artist_image/(:num)', 'admin\Artist::updateArtistImage/$1');

$routes->get('artist/edit_artistData/(:num)', 'admin\Artist::editArtistData/$1');
$routes->post('artist/update_artistData/(:num)', 'admin\Artist::updateArtistData/$1');
//$routes->post('artist/update_artistData_image/(:num)', 'admin\Artist::updateArtistDataImage/$1');

$routes->get('artist/get_artistData', 'admin\Artist::artistData');  
$routes->get('artist/view_artistData/(:num)', 'admin\Artist::artistViewData/$1');
$routes->DELETE('artist/delete_artistData/(:num)', 'admin\Artist::artistDeleteData/$1');

$routes->get('events/getData_event', 'admin\Events::index');
$routes->get('events/view_event/(:num)', 'admin\Events::geteventsview1/$1');
$routes->get('events/add_event', 'admin\Events::geteventsadd1');
$routes->post('events/insert_event', 'admin\Events::insertEventDB');
$routes->get('events/edit_event/(:num)', 'admin\Events::editEvent/$1');
$routes->post('events/updated_event/(:num)', 'admin\Events::updateEvent/$1');
$routes->post('events/updated_event_image/(:num)', 'admin\Events::updateEventImage/$1');
$routes->DELETE('events/delete_event/(:num)', 'admin\Events::deleteEvent/$1');

$routes->get('tevents/get_event', 'admin\Tevents::index');
$routes->get('tevents/add_event', 'admin\Tevents::getTevents');
$routes->post('tevents/insert_event', 'admin\Tevents::insertTevent');
$routes->get('tevents/edit_event/(:num)', 'admin\Tevents::editTEvent/$1');
$routes->post('tevents/update_event/(:num)', 'admin\Tevents::updateTEvent/$1');
$routes->DELETE('tevents/delete_tevent/(:num)', 'admin\Tevents::deleteTEvent/$1');

$routes->get('youtube/getData_youtube', 'admin\Youtube::index');
$routes->get('youtube/add_youtube', 'admin\Youtube::addYoutube');
$routes->post('youtube/insert_youtube', 'admin\Youtube::insertYoutube');
$routes->get('youtube/view_youtube/(:num)', 'admin\Youtube::viewYoutube/$1');
$routes->get('youtube/edit_youtube/(:num)', 'admin\Youtube::editYoutube/$1');
$routes->post('youtube/update_youtube/(:num)', 'admin\Youtube::updateYoutube/$1');
$routes->post('youtube/update_youtube_image/(:num)', 'admin\Youtube::updateYoutubeImage/$1');
$routes->DELETE('youtube/delete_youtube/(:num)', 'admin\Youtube::deleteYoutube/$1');

$routes->get('testimonial/getData_testimonial', 'admin\Testimonial::index');
$routes->get('testimonial/add_testimonial', 'admin\Testimonial::addTestimonial');
$routes->post('testimonial/insert_testi', 'admin\Testimonial::insertTestimonial');
$routes->get('testimonial/view_testimonial/(:num)', 'admin\Testimonial::viewTestimonial/$1');
$routes->get('testimonial/edit_testi/(:num)', 'admin\Testimonial::editTestimonial/$1');
$routes->post('testimonial/update_testi/(:num)', 'admin\Testimonial::updateTestimonial/$1');
$routes->post('testimonial/update_testi_image/(:num)', 'admin\Testimonial::updateTestimonialImage/$1');
$routes->DELETE('testimonial/remove_testi/(:num)', 'admin\Testimonial::deleteTestimonial/$1'); 

$routes->get('gallery/getData_gallery', 'admin\Gallery::index');
$routes->get('gallery/add_gallery', 'admin\Gallery::addImage');
$routes->post('gallery/insert_gallery', 'admin\Gallery::insertImage');
$routes->get('gallery/view_gallery/(:num)', 'admin\Gallery::viewImage/$1');
$routes->get('gallery/edit_gallery/(:num)', 'admin\Gallery::editImage/$1');
$routes->post('gallery/update_gallery/(:num)', 'admin\Gallery::updateImage/$1');
$routes->post('gallery/update_gallery_image/(:num)', 'admin\Gallery::updateImageImage/$1');
$routes->DELETE('gallery/remove_gallery/(:num)', 'admin\Gallery::deleteImage/$1'); 


$routes->get('contact/getData_contact', 'admin\Contact::index');
$routes->get('contact/view_contact/(:num)', 'admin\Contact::viewContact/$1');
$routes->DELETE('contact/remove_contact/(:num)', 'admin\Contact::deleteContact/$1'); 

$routes->get('newsletter/getData_newsletter', 'admin\Newsletter::index');
$routes->get('newsletter/view_newsletter/(:num)', 'admin\Newsletter::viewNewletter/$1');
$routes->DELETE('newsletter/remove_newsletter/(:num)', 'admin\Newsletter::deleteNewletter/$1'); 

$routes->get('blogs/getData_blog', 'admin\Blog::index');
$routes->get('blogs/view_blog/(:num)', 'admin\Blog::getblogsview1/$1');

$routes->post('blogs/add_reply/(:num)', 'admin\Blog::addReply1/$1');
$routes->DELETE('blogs/delete_comment/(:num)', 'admin\Blog::deleteComment1/$1');
$routes->get('blogs/delete_reply/(:num)', 'admin\Blog::deleteReply1/$1');

$routes->get('blogs/add_blog', 'admin\Blog::getblogsadd1');
$routes->post('blogs/insert_blog', 'admin\Blog::insertBlogDB');
$routes->get('blogs/edit_blog/(:num)', 'admin\Blog::editBlog/$1');
$routes->post('blogs/updated_blog/(:num)', 'admin\Blog::updateBlog/$1');
$routes->post('blogs/updated_blog_image/(:num)', 'admin\Blog::updateBlogImage/$1');
$routes->DELETE('blogs/delete_blog/(:num)', 'admin\Blog::deleteBlog/$1');

$routes->get('recycle/recycle_bin', 'admin\Recycle::index/$1');
/*;
 * --------------------------------------------------------------------
 * Route Definitions
 * -------------------------------------------------------------------- 
 */
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
