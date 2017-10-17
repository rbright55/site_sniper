<?php

namespace App\Http\Traits;

use JonnyW\PhantomJs\Client;
use App\Snapshot;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\File as fileentry;

trait SnapshotTrait {
    public function takeSnap($site) {
    	/*
		* Need to find out what happens if site unreachable
    	*/

		$random_file_name = md5(uniqid(rand(), true));


        //take snap of site
	    $client = Client::getInstance();
	    $client->isLazy();

	    $client->getEngine()->setPath('../bin/phantomjs');
	    $request  = $client->getMessageFactory()->createCaptureRequest($site);
	    $request->setViewportSize(1024, 960);
	    //$request->setDelay(15);
	    //$request->setQuality(300);
	    $response = $client->getMessageFactory()->createResponse();
	    $client->send($request, $response);

	    
	    $file_o = '../bin/'.$random_file_name.'.jpg';
	    $request->setOutputFile($file_o);
	    $client->send($request, $response);

	    $file = new File($file_o);
	    $stored_file = Storage::putFile('/', $file);
	    unlink($file_o);

	    //store link in file db table
	    $entry = new fileentry;
	    $entry->mime = Storage::mimeType($stored_file);
		$entry->original_filename = $stored_file;
		$entry->filename = $stored_file;
		$entry->save();
		//file entry id
	    return $entry->id;


    }
}