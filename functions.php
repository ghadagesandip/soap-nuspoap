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

    $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\">
       <soap:Body>
             <Response>
                <Status>
                   <Success>true</Success>
                   <Exception />
                </Status>
                <Data>

                      <id>215</id>
                      <product_category_id>1795</product_category_id>
                      <name>Hotel Gaddis</name>
                      <producer>3.0</producer>
                      <description>Egypte</description>
                      <cost>Louxor</cost>
                      <rating>Cet établissement confortable propose un très bon service à un bon rapport qualité-prix. Cet hôtel de 6 étages compte 55 chambres et comprend une terrasse, une réception avec coffre-fort et ascenseur,</rating>
                      <view_count>Cet établissement confortable propose un très bon service à un bon rapport qualité-prix. Cet hôtel de 6 étages compte 55 chambres et comprend une terrasse, une réception avec coffre-fort et ascenseur,...</view_count>
                      <created>http://lcbtestxml1.ivector.co.uk/content/DataObjects/Property/Image/</created>
                      <modified>image_1795_v1.jpg</modified>
                      <product_images>
                            <product_id>690039000</product_id>
                            <image>3</image>
                            <created>Twin/double Room</created>
                            <modified>Petit Déjeuner</modified>
                      </product_images>

                </Data>
                <Message></Message>
                <UserMessage></UserMessage>
             </Response>

       </soap:Body>
    </soap:Envelope>";

    return $xml;



}

?>