<?php
function price($name){

    $details = array(
        "abc" => 100,
        "xyz" => 200
    );

    foreach($details as $key=>$val){

        if($name == $key){
            $price =  $val;
        }
    }


    return $price;

}


function login($username, $password) {
    //should do some database query here
    // .... ..... ..... .....
    //just some dummy result
    return array(
        'id_user'=>1,
        'fullname'=>'John Reese',
        'email'=>"john@reese.com",
		'level'=>99
	);

    $xml = simplexml_load_file('file.xml') or die(); //file is loaded successfully
    $xml->asXml('newFile.xml'); // returns false (doesn't save the file)

    $dom = dom_import_simplexml($xml)->ownerDocument;
    $dom->formatOutput = true;
    $dom->save('newFile.xml'); // returns false (doesn't save the file)
    return $dom->saveXML(); // after printing client-side I get the correct XML

}

?>