<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new JMS\SerializerBundle\JMSSerializerBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),

            new CuteNinja\CommonBundle\CuteNinjaCommonBundle(),

            new BrainDumper\Bundle\UserBundle\BrainDumperUserBundle(),
            new BrainDumper\Bundle\MoodGraphBundle\BrainDumperMoodGraphBundle(),
            new BrainDumper\Bundle\AgileBoardBundle\BrainDumperAgileBoardBundle(),
            new BrainDumper\Bundle\AgendaBundle\BrainDumperAgendaBundle(),
            new BrainDumper\Bundle\GuardianBundle\BrainDumperGuardianBundle(),
            new BrainDumper\Bundle\One2OneBundle\BrainDumperOne2OneBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new h4cc\AliceFixturesBundle\h4ccAliceFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
