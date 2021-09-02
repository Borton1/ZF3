<?php
namespace MyBlog\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Interop\Container\ContainerInterface;
use MyBlog\Controller\BlogController;
use Zend\ServiceManager\ServiceLocatorInterface;

class BlogControllerFactory implements FactoryInterface {
//    public function __invoke(ContainerInterface $container , $requestedName , array $options = null){
//        if ($container instanceof ServiceLocatorAwareInterface) {
//                    $container = $container->getServiceLocator();
//                }
//
//        return new BlogController($container->get('Doctrine\ORM\EntityManager'));
//    }
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         print_r(get_class($serviceLocator->get('Doctrine\ORM\EntityManager')));
         die();

//         if ($serviceLocator instanceof ServiceLocatorAwareInterface) {
//             $serviceLocator = $serviceLocator->getServiceLocator();
//         }

         return new BlogController($serviceLocator->get('Doctrine\ORM\EntityManager'));
     }
}