<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'myblog_entity' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(__DIR__ . '/../src/MyBlog/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'MyBlog\Entity' => 'myblog_entity',
                )
            )
        )
    ),

    'controllers' => array(
        'factories' => array(
                    'MyBlog\Controller\BlogController' => 'MyBlog\Controller\Factory\BlogControllerFactory',
                ),
//         'invokables' => array(
//             'MyBlog\Controller\BlogPost' => 'MyBlog\Controller\BlogController',
//         ),
    ),

    'view_helpers' => array(
        'invokables' => array(
            'showMessages' => 'MyBlog\Helper\ShowMessages',
        ),
    ),
//         'view_helpers' => [
//                 'factories' => [
//                     'MyBlog\View\Helper\ShowMessages' => 'Zend\ServiceManager\Factory\InvokableFactory',
//                 ],
//                 'aliases' => [
//                     'showMessages' => 'MyBlog\View\Helper\ShowMessages',
//                ]
//             ],


    'router' => array(
        'routes' => array(
            'blog' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/MyBlog[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'MyBlog\Controller\BlogController',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
           __DIR__ . '/../View',
        ),
    ),

);

