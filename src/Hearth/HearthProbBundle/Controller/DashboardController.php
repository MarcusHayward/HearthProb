<?php

namespace Hearth\HearthProbBundle\Controller;

use Hearth\HearthProb\DashboardAssembler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route(service="controllers.dashboard")
 */
class DashboardController
{
    /**
     * @var DashboardAssembler
     */
    private $assembler;

    /**
     * @param DashboardAssembler $assembler
     */
    public function __construct(DashboardAssembler $assembler)
    {
        $this->assembler = $assembler;
    }

    /**
     * @Route("/", name="home")
     * @Method({"GET"})
     * @Template()
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @return string
     */
    public function indexAction()
    {
        return ["item" => $this->assembler->assemble()];
    }
}
