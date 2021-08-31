<?php
namespace MyBlog\Controller\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Interop\Container\ContainerInterface;
use MyBlog\Controller\BlogController;
class BlogControllerFactory implements FactoryInterface {
    public function __invoke(ContainerInterface $container , $requestedName , array $options = null){
        if ($container instanceof ServiceLocatorAwareInterface) {
                    $container = $container->getServiceLocator();
                }

        return new BlogController($container->get('Doctrine\ORM\EntityManager'));
    }
//     public function createService()
//     {
//
//     }
}