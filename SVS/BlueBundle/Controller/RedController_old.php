<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RedController extends Controller
{
    /**
     * @Route("/show")
     * @Template()
     */
    public function showAction()
    {
        return array(
                // ...
            );    }

}
