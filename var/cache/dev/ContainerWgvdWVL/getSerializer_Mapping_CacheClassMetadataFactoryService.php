<?php

namespace ContainerWgvdWVL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_CacheClassMetadataFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

        return $container->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()))])), \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($container->targetDir.''.'/serialization.php'), ($container->privates['cache.serializer'] ?? $container->getCache_SerializerService())));
    }
}
