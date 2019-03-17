<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function instagram($tag,$num)
    {

            
        	$tag = str_replace(' ','',$tag);
        	$tag = str_replace('#','',$tag);
 			$instagram = new \InstagramScraper\Instagram();
            
            $medias = $instagram->getMediasByTag($tag,(integer)$num);
    		
    		return $medias;
	}

    protected $table = 'homes';

}
