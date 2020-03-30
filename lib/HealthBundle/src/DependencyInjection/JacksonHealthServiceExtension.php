<?php

namespace Jackson\HealthBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;


/**
 * Create a DenpencyInjection class for  for health services 
 *
 * @author Jackson <jackson.kambaragye@capetown.co.za>
 */
class JacksonHealthServiceExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
      
          $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
          $loader->load('services.xml');


    }

}
