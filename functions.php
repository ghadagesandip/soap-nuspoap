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

    return array('price'=>$price);
    //return $price;

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
}

?>