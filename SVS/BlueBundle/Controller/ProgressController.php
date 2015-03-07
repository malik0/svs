<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProgressController extends Controller
{
	/**
     * Lists all Gold entities.
     *
     * @Route("/progress", name="progress")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $existContact = $em->getRepository('SVSBlueBundle:Contact')->findAll();
		$existInfomation = $em->getRepository('SVSBlueBundle:Information')->findAll();
		$existWork = $em->getRepository('SVSBlueBundle:Gold')->findAll();
		$existAvailability = $em->getRepository('SVSBlueBundle:availablity')->findAll();
		$existDeclaration = $em->getRepository('SVSBlueBundle:Declaration')->findAll();
		
		if($existContact){
			
			$contactComp = true;
			
		}
		else {
			
			$contactComp = false;
		}
		
		if($existContact){
			
			$contactComp = true;
			
		}
		else {
			
			$contactComp = false;
		}
		
		if($existContact){
			
			$contactComp = true;
			
		}
		else {
			
			$contactComp = false;
		}
		
		if($existContact){
			
			$contactComp = true;
			
		}
		else {
			
			$contactComp = false;
		}
		
		if($existContact){
			
			$contactComp = true;
			
		}
		else {
			
			$contactComp = false;
		}

        return array(
            'contactComp' => $contactComp,
        );
    }
	
}
