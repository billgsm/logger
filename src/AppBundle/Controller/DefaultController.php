<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $this->get('logger')->info("test {key}=====================================================================", ['key' => 'bilou']);
        $this->get('logger_ws')->testLogger();
        $this->get('monolog.logger.foo')->info("last {key} test", ['key' => 'bilou']);

        return $this->render('default/index.html.twig');
        return new Response('hello world!!');
    }
}
