<?php

namespace Hearth\HearthProbBundle\Controller;

use Hearth\HearthProb\DashboardAssembler;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
     * @Method({"GET", "POST"})
     * @Template()
     *
     * @param Request $request
     *
     * @return string
     */
    public function indexAction(Request $request)
    {
        $probability = -1;

        if ($request->isMethod('POST')) {
            $probability = $this->assembler->handleAndFindProbability($request);
        }

        return ["form" => $this->assembler->assemble()->createView(), "results" => $probability];
    }
}
