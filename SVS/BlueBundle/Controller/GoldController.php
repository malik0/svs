<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SVS\BlueBundle\Entity\Gold;
use SVS\BlueBundle\Form\GoldType;

/**
 * Gold controller.
 *
 * @Route("/gold")
 */
class GoldController extends Controller
{

    /**
     * Lists all Gold entities.
     *
     * @Route("/", name="gold")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SVSBlueBundle:Gold')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Gold entity.
     *
     * @Route("/", name="gold_create")
     * @Method("POST")
     * @Template("SVSBlueBundle:Gold:new.html.twig")
     */
    public function createAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
		if ($entities = $em->getRepository('SVSBlueBundle:Gold')->findAll()){
			$workbefore = "1";
			$workorder = "2";
			$entity = new Gold();
			$entity->setWorkbefore($workbefore);
			$entity->setWorkorder($workorder);
			
			
		}else {
			$workbefore = "0";
			$workorder = "1";
			$entity = new Gold();
			$entity->setWorkbefore($workbefore);
			$entity->setWorkorder($workorder);
		}
		
		

       
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gold_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
           
        );
    }

    /**
     * Creates a form to create a Gold entity.
     *
     * @param Gold $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Gold $entity)
    {
        $form = $this->createForm(new GoldType(), $entity, array(
            'action' => $this->generateUrl('gold_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Gold entity.
     *
     * @Route("/new", name="gold_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
    	
		$em = $this->getDoctrine()->getManager();
				 
		 $repository = $this->getDoctrine()
    ->getRepository('SVSBlueBundle:Gold');

$query = $em->createQuery(
    'SELECT p
    FROM SVSBlueBundle:Gold p
    ORDER BY p.enddate DESC'
)->setMaxResults(1);

$products = $query->getResult();
		
		
        $entity = new Gold();
        foreach($products as $adate){
        	
			$entity->setAfterdate($adate->getEnddate());
		}
		
        $form   = $this->createCreateForm($entity);
		
		

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'test' => $products
        );
		
		
    }

    /**
     * Finds and displays a Gold entity.
     *
     * @Route("/{id}", name="gold_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Gold')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gold entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Gold entity.
     *
     * @Route("/{id}/edit", name="gold_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Gold')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gold entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Gold entity.
    *
    * @param Gold $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Gold $entity)
    {
        $form = $this->createForm(new GoldType(), $entity, array(
            'action' => $this->generateUrl('gold_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Gold entity.
     *
     * @Route("/{id}", name="gold_update")
     * @Method("PUT")
     * @Template("SVSBlueBundle:Gold:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Gold')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gold entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gold_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Gold entity.
     *
     * @Route("/{id}", name="gold_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SVSBlueBundle:Gold')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gold entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gold'));
    }

    /**
     * Creates a form to delete a Gold entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gold_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
