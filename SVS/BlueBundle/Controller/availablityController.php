<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SVS\BlueBundle\Entity\availablity;
use SVS\BlueBundle\Form\availablityType;

/**
 * availablity controller.
 *
 * @Route("/availablity")
 */
class availablityController extends Controller
{

    /**
     * Lists all availablity entities.
     *
     * @Route("/", name="availablity")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SVSBlueBundle:availablity')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new availablity entity.
     *
     * @Route("/", name="availablity_create")
     * @Method("POST")
     * @Template("SVSBlueBundle:availablity:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new availablity();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('availablity_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a availablity entity.
     *
     * @param availablity $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(availablity $entity)
    {
        $form = $this->createForm(new availablityType(), $entity, array(
            'action' => $this->generateUrl('availablity_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new availablity entity.
     *
     * @Route("/new", name="availablity_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new availablity();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a availablity entity.
     *
     * @Route("/{id}", name="availablity_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:availablity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find availablity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing availablity entity.
     *
     * @Route("/{id}/edit", name="availablity_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:availablity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find availablity entity.');
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
    * Creates a form to edit a availablity entity.
    *
    * @param availablity $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(availablity $entity)
    {
        $form = $this->createForm(new availablityType(), $entity, array(
            'action' => $this->generateUrl('availablity_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing availablity entity.
     *
     * @Route("/{id}", name="availablity_update")
     * @Method("PUT")
     * @Template("SVSBlueBundle:availablity:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:availablity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find availablity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('availablity_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a availablity entity.
     *
     * @Route("/{id}", name="availablity_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SVSBlueBundle:availablity')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find availablity entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('availablity'));
    }

    /**
     * Creates a form to delete a availablity entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('availablity_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
