<?php

namespace App\Http\Traits;

use JonnyW\PhantomJs\Client;
use App\Snapshot;

trait BrandsTrait {
    public function takeSnap($site) {
    	//validate text


        //take snap of site
	    $client = Client::getInstance();
	    $client->isLazy();

	    /** 
	     * @see JonnyW\PhantomJs\Http\Request
	     **/
	    $request = $client->getMessageFactory()->createRequest('http://google.me', 'GET');
	    $request->setTimeout(5000);

	    /** 
	     * @see JonnyW\PhantomJs\Http\Response 
	     **/
	    $response = $client->getMessageFactory()->createResponse();

	    // Send the request
	    $client->send($request, $response);

	    if($response->getStatus() === 200) {

	        // Dump the requested page content
	        return $response->getContent();
	    }
    }
}