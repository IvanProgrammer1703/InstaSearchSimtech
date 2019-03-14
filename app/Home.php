<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function instagram($tag,$num = 9){
    	
        	$tag = str_replace(' ','',$tag);
        	$tag = str_replace('#','',$tag);
 			$instagram = new \InstagramScraper\Instagram();
    		try{
        		$medias = $instagram->getMediasByTag($tag,(integer)$num);
    		}
    		catch(Exception $e){

    		}
    		return $medias;
	}

    protected $table = 'homes';

}
