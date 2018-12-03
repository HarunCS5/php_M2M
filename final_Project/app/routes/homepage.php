<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



$app->get('/', function(Request $request, Response $response)
{

    return $this->view->render($response,
        'homeform.html.twig',
        [
            'css_path' => CSS_PATH,
            'landing_page' => LANDING_PAGE,
            'method' => 'post',

            'action' => 'index.php/',

            'initial_input_box_value' => null,
            'page_title' => APP_NAME,
            'page_heading_2' => 'Sending a message',
            'page_text' => 'Enter a message to send ' .SEND_MESSAGE,
            'submit_button' => SEND_MESSAGE,
        ]);
})->setName('homepage');
