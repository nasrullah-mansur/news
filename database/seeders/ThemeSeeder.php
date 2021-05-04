<?php

namespace Database\Seeders;

use App\Models\Admin\Theme;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            'theme_name' => 'Newslay',
            'logo' => 'logo.png',
            'footer_logo' => 'footer-logo.png',
            'favicon' => 'favicon.png',

            'pl_address' => '<p>2972 Westheimer Rd. Santa  Illinois 85486 </p>',
            'pl_support_hour' => '<span>Sunday - Friday </span> <span>9.30pm  - 10 am  </span>',
            'sl_address' => '<p>2972 Westheimer Rd. Santa  Illinois 85486 </p>',
            'sl_support_hour' => '<span>Sunday - Friday </span> <span>9.30pm  - 10 am  </span>',
            'quick_contact' => ' <a href="#">Sport@eamplae.com</a> <p>[+88 ] -456 6632 3136</p>',
            'copyright' => '&copy; All right reserved.',

            'pl_flag' => 'flag.png',
            'sl_flag' => 'sl_flag.png',
            'pl_name' => 'English',
            'sl_name' => 'Spanish',

            'google_map' => '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY"></script>',
            'google_map_script' =>
            '<script>
            if ($("#gmap").length > 0) {
             new GMaps({
               div: "#gmap",
               lat: 23.7947172, // 23.7947172,90.3971412
               lng: 90.3971412,
               scrollwheel: false,
               styles: [
                 {
                   "featureType": "landscape",
                   "elementType": "geometry",
                   "stylers": [
                     {
                       "color": "#dddddd"
                     },
                     {
                       "lightness": 20
                     }
                   ]
                 },
                 {
                   "featureType": "road.highway",
                   "elementType": "geometry.fill",
                   "stylers": [
                     {
                       "color": "#ffffff"
                     },
                     {
                       "lightness": 17
                     }
                   ]
                 },
                 {
                   "featureType": "road.highway",
                   "elementType": "geometry.stroke",
                   "stylers": [
                     {
                       "color": "#ffffff"
                     },
                     {
                       "lightness": 29
                     },
                     {
                       "weight": 0.2
                     }
                   ]
                 },
                 {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [
                     {
                       "color": "#ffffff"
                     },
                     {
                       "lightness": 18
                     }
                   ]
                 },
                 {
                   "featureType": "road.local",
                   "elementType": "geometry",
                   "stylers": [
                     {
                       "color": "#dddddd"
                     },
                     {
                       "lightness": 16
                     }
                   ]
                 },
                 {
                   "featureType": "poi",
                   "elementType": "geometry",
                   "stylers": [
                     {
                       "color": "#ffffff"
                     },
                     {
                       "lightness": 21
                     }
                   ]
                 },
                 {
                   "featureType": "poi.park",
                   "elementType": "geometry",
                   "stylers": [
                     {
                       "color": "#ffffff"
                     },
                     {
                       "lightness": 21
                     }
                   ]
                 },
                 {
                   "elementType": "labels.text.stroke",
                   "stylers": [
                     {
                       "visibility": "on"
                     },
                     {
                       "color": "#ffffff"
                     },
                     {
                       "lightness": 16
                     }
                   ]
                 },
                 {
                   "elementType": "labels.icon",
                   "stylers": [
                     {
                       "visibility": "on"
                     }
                   ]
                 }
               ]
             }).addMarker({
               lat: 23.792930, //23.792930, 90.403798
               lng: 90.403798,
               infoWindow: {
                 content: \'<div class="map-marker-box"><h3 class="title">Headquarter</h3> <p>9541 Brightwell Dr, <br /> Indianapolis, IN 46260</p></div>\',
               }
             });
           };
       </script>',
        ]);
    }
}
