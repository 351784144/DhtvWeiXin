<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'Message_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Message/Entity')
            ),
    
            'orm_default' => array(
                'drivers' => array(
                    'Message\Entity' => 'Message_entities'
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Message\Controller\Processing' => 'Message\Controller\ProcessingController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'message' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/processing',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Message\Controller',
                        'controller'    => 'Processing',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Message' => __DIR__ . '/../view',
        ),
    ),
);
