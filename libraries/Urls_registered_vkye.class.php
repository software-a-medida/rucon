<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/acerca-de-nosotros' => [
                'controller' => 'Index',
                'method' => 'about_us'
            ],
            '/servicios' => [
                'controller' => 'Index',
                'method' => 'services'
            ],
            '/llave-en-mano' => [
                'controller' => 'Index',
                'method' => 'key_on_hand'
            ],
            '/proyectos' => [
                'controller' => 'Index',
                'method' => 'projects'
            ],
            '/proyectos/%param%' => [
                'controller' => 'Index',
                'method' => 'projects'
            ],
            '/contactanos' => [
                'controller' => 'Index',
                'method' => 'contact_us'
            ],
            '/iniciar-sesion' => [
                'controller' => 'Index',
                'method' => 'login'
            ],
            '/cerrar-sesion' => [
                'controller' => 'Index',
                'method' => 'logout'
            ],
            '/aviso-de-privacidad' => [
                'controller' => 'Index',
                'method' => 'privacy_notice'
            ]
        ];
    }
}
