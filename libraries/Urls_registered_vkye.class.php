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
            '/nosotros' => [
                'controller' => 'Index',
                'method' => 'about'
            ],
            '/servicios' => [
                'controller' => 'Index',
                'method' => 'services'
            ],
            '/llave-en-mano' => [
                'controller' => 'Index',
                'method' => 'keyonhand'
            ],
            '/proyectos' => [
                'controller' => 'Index',
                'method' => 'projects'
            ],
            '/contacto' => [
                'controller' => 'Index',
                'method' => 'contact'
            ],
            '/aviso-de-privacidad' => [
                'controller' => 'Index',
                'method' => 'privacynotice'
            ]
        ];
    }
}
