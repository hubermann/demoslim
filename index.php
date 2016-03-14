<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


function base_url($url =""){
  return "http://madererapinar.com.ar/".$url;
  #return "http://localhost/slim/".$url;
}


// GET route
$app->get('/',function () use ($app){
        $app->render('inicio.php');
    }
);

$app->get('/imagenes',function () use ($app){
        $app->render('galeria.php');
    }
);

$app->get('/la-empresa',function () use ($app){
        $app->render('la_empresa.php');
    }
);

$app->get('/sucursales',function () use ($app){
        $app->render('sucursales.php');
    }
);

//si llega a capacitaciones sin fecha seleccionada
$app->get('/capacitaciones',function () use ($app){
        $hoy = date("Y-m-01");
        $app->redirect( base_url('/capacitaciones/'.$hoy) );
    }
);
//CAPACITACIONES
$app->get('/capacitaciones/:fecha',function ($fecha) use ($app){
        $app->render('capacitaciones.php', array('fecha' => $fecha));
    }
);

//PRODUCTOS
$app->get('/producto-detalle/:id',function ( $id ) use ($app){

        $app->render('grupo_producto_detalle.php', array('idproducto'=>$id) );
    }
);

$app->get('/grupo-de-productos',function () use ($app){
        $app->render('grupo_productos.php');
    }
);

//SERVICIOS
$app->get('/servicios',function () use ($app){
        $app->render('servicios.php');
    }
);


//SERVICIOS DETALLE
$app->get('/servicio/:slug/:id',function ( $slug, $id ) use ($app){

        $app->render('servicio_detalle.php', array('idservicio'=>$id) );
    }
);

//NOVEDADES
$app->get('/novedades',function () use ($app){
        $app->render('novedades.php');
    }
);

//NOVEDADES DETALLE
$app->get('/novedades/:slug/:id',function ( $slug, $id ) use ($app){

        $app->render('novedades_detalle.php', array('idnovedad'=>$id) );
    }
);

//Red M
$app->get('/red-m',function () use ($app){

        $app->render('red_m.php');
    }
);

//Masisa Inspira
$app->get('/masisa-inspira',function () use ($app){

        $app->render('masisa_inspira.php');
    }
);

//Sobre placacentro
$app->get('/sobre-placacentro',function () use ($app){

        $app->render('sobre_placacentro.php');
    }
);

$app->post('/process',function () use ($app){

    $errors = array();  // array to hold validation errors
    $data = array();        // array to pass back data

    // validate the variables ========
    if (empty($_POST['nombre']))
      $errors['nombre'] = 'Nombre es requerido.';

    if (empty($_POST['email']))
      $errors['email'] = 'Email es requerido.';

    if (empty($_POST['mensaje']))
      $errors['mensaje'] = 'El mensaje es requerido.';

    // return a response ==============

    // response if there are errors
    if ( ! empty($errors)) {

      // if there are items in our errors array, return those errors
      $data['success'] = false;
      $data['errors']  = $errors;
    } else {
        ######## ENVIO
        require_once 'lib/swift_required.php';

        // Create Transport
        $transport = Swift_MailTransport::newInstance();

        // Create Mailer with our Transport.
        $mailer = Swift_Mailer::newInstance($transport);

        $msg = "Nombre: ".$_POST['nombre']." .- \n";
        $msg .= "Apellido: ".$_POST['apellido']." .- \n";
        $msg .= "Email: ".$_POST['email']." .- \n";
        $msg .= "Mensaje: ".$_POST['mensaje']." .- \n";
        $msg .= "Para sucursal: ".$_POST['sucursal']." .- \n";
        $msg .= "Este mensaje ha sido enviado a través de formulario en el website \n";

        // Setting all needed info and passing in my email template.
        $message = Swift_Message::newInstance('Contacto desde el website.')
                    ->setFrom(array('pinar@madererapinar.com.ar' => 'Masisa web'))
                    ->setTo(array('pinar@madererapinar.com.ar' => 'Website Maderera Pinar'))
                    ->setBody($msg)
                    ->setContentType("text/html");

        // Send the message
        $results = $mailer->send($message);

        // Print the results, 1 = message sent!
        //print($results);

        ########
      // if there are no errors, return a message
      $data['success'] = true;
      $data['message'] = 'Mensaje enviado, Gracias!';
    }

    // return all our data to an AJAX call
    echo json_encode($data);

   
    }
);

$app->get('/test',function () use ($app){
require_once 'lib/swift_required.php';

// Create Transport
$transport = Swift_MailTransport::newInstance();

// Create Mailer with our Transport.
$mailer = Swift_Mailer::newInstance($transport);

$msg = "Nombre:  \n";
$msg .= "Apellido:  \n";
$msg .= "Email:  \n";
$msg .= "Mensaje:  \n";
$msg .= "Este mensaje ha sido enviado a través de formulario en el website \n";

// Setting all needed info and passing in my email template.
$message = Swift_Message::newInstance('Contacto desde el website.')
            ->setFrom(array('pinar@madererapinar.com.ar' => 'Masisa web'))
            ->setTo(array('pinar@madererapinar.com.ar' => 'Admin'))
            ->setBody($msg)
            ->setContentType("text/html");

// Send the message
$results = $mailer->send($message);

// Print the results, 1 = message sent!
//print($results);

});

$app->run();
