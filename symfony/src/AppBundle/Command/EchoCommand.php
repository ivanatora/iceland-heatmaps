<?php

namespace AppBundle\Command;

use AppBundle\Entity\Recording;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class EchoCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        parent::configure(); // TODO: Change the autogenerated stub
        $this->setName('app:echo')
            ->setDescription('echo')
            ->setHelp('aksdkaskaskas');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $date = new \DateTime();
        $date = $date->format('Y-m-d H:i:s');
        print "test at $date\n";

    }
}