<?php

namespace Hearth\HearthProbBundle\Controller;

use Hearth\HearthProb\DashboardAssembler;
use Symfony\Component\HttpFoundation\Request;

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
     * @param Request $request
     *
     * @return string
     */
    public function indexAction()
    {
//        if ('POST' === $request->getMethod()) {
//            $probability = $this->assembler->handleAndFindProbability($request);
//        }

        return ["form" => $this->assembler->assemble()->createView()];
    }
}
