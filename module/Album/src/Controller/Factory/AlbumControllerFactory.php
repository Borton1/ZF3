<?php
namespace Album\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Interop\Container\ContainerInterface;
use Album\Controller\AlbumController;
use Zend\ServiceManager\ServiceLocatorInterface;

class AlbumControllerFactory implements FactoryInterface {
//    public function __invoke(ContainerInterface $container , $requestedName , array $options = null){
//        if ($container instanceof ServiceLocatorAwareInterface) {
//                    $container = $container->getServiceLocator();
//                }
//
//        return new BlogController($container->get('Doctrine\ORM\EntityManager'));
//    }

     public function createService(ServiceLocatorInterface $serviceLocator)
     {

         if ($serviceLocator instanceof ServiceLocatorAwareInterface) {
             $serviceLocator = $serviceLocator->getServiceLocator();
         }
//         print_r(get_class($serviceLocator));
//         die();
         return new AlbumController($serviceLocator->get('Album\Model\AlbumTable'));
     }
}