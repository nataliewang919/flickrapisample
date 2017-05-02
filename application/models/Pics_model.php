<?php
class Pics_model extends CI_Model {
    
public function get_pics($param)
{
$api_key = '002e8e42551bffdb1edd2c182a35d936';
//$tags = 'bears,polar';
$perPage = 25;
$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key=' . $api_key;
$url.= '&tags=' . $param;
$url.= '&per_page=' . $perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
 
$response = json_decode(file_get_contents($url));
$pics = $response->photos->photo;
    return $pics;
         }//end get_news() methods 
}//end news_model class 