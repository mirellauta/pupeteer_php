<?php 

require 'vendor/autoload.php';

use PuppetBridge\Capture;

try{
    $screenCapture = new Capture();
    $screenCapture->setImageType( 'png' );
    $screenCapture->setUrl( 'https://public.tableau.com/views/50MostInnovativeCompanies-2020/Dashboard1?:language=en&:display_count=y&:origin=viz_share_link&:showVizHome=no' );
    $screenCapture->setTop(10);
    $screenCapture->setLeft(50);
    $screenCapture->setWidth( '600' );
    $screenCapture->setHeight( '600' );
    $screenCapture->save( 'testimg.png' ); // make sure images folder is writable

} catch (Exception $ex) {
    echo $ex->getMessage();
}

