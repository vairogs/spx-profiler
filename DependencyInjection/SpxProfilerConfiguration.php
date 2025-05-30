<?php declare(strict_types = 1);

/*
 * This file is part of the Vairogs package.
 *
 * (c) Dāvis Zālītis (k0d3r1s) <davis@vairogs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vairogs\Component\SpxProfiler\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Vairogs\Bundle\DependencyInjection\AbstractDependencyConfiguration;
use Vairogs\Component\SpxProfiler\DependencyInjection\CompilerPass\TwigCompilerPass;

class SpxProfilerConfiguration extends AbstractDependencyConfiguration
{
    public function build(
        ContainerBuilder $container,
    ): void {
        $container->addCompilerPass(new TwigCompilerPass());
    }
}
