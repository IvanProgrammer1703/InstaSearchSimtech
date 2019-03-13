<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    public function instagram($tag,$num = 10){
    	$instagram = new \InstagramScraper\Instagram();
        $medias = $instagram->getMediasByTag($tag,$num);
    	return $medias;
    }

    protected $table = 'homes';

}
