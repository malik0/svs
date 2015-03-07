<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
	
	
	/**
     * Lists all Gold entities.
     *
     * @Route("/dashboardnew", name="dashboardnew")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
    	$exist = $this->progress('contact');
		return array(
            'exist' => $exist,
        );
		
	}
	
	
	
	public function progress($item){
		
		$exist = false;
		
		if ($item == "contact")
		{
			
			$em = $this->getDoctrine()->getManager();

        $existContact = $em->getRepository('SVSBlueBundle:Contact')->findBy(array('user' => $this->getUser()));
		if ($existContact){
			
			$exist = true;
		}
		else {
			
			$exist = false;
		}
			return $exist;
			
		}
		
	}
	
}
