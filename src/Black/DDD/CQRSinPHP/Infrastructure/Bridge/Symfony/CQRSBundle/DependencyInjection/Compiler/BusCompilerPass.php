<?php
/*
 * This file is part of the ${FILE_HEADER_PACKAGE}.
 *
 * ${FILE_HEADER_COPYRIGHT}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Black\Bundle\CQRSBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class BusCompilerPass
 */
class BusCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('black_cqrs.infrastructure.command.bus')) {
            return;
        }

        $definition = $container->findDefinition(
            'black_cqrs.infrastructure.command.bus'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'black_cqrs.handler'
        );

        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $attributes) {
                $definition->addMethodCall(
                    'register',
                    [$attributes["command"], new Reference($id)]
                );
            }
        }
    }
}
