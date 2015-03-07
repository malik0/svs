<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SVS\BlueBundle\Entity\Declaration;
use SVS\BlueBundle\Form\DeclarationType;

/**
 * Declaration controller.
 *
 * @Route("/declaration")
 */
class DeclarationController extends Controller
{

    /**
     * Lists all Declaration entities.
     *
     * @Route("/", name="declaration")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SVSBlueBundle:Declaration')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Declaration entity.
     *
     * @Route("/", name="declaration_create")
     * @Method("POST")
     * @Template("SVSBlueBundle:Declaration:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Declaration();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('declaration_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Declaration entity.
     *
     * @param Declaration $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Declaration $entity)
    {
        $form = $this->createForm(new DeclarationType(), $entity, array(
            'action' => $this->generateUrl('declaration_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Declaration entity.
     *
     * @Route("/new", name="declaration_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Declaration();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Declaration entity.
     *
     * @Route("/{id}", name="declaration_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Declaration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Declaration entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Declaration entity.
     *
     * @Route("/{id}/edit", name="declaration_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Declaration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Declaration entity.');
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
    * Creates a form to edit a Declaration entity.
    *
    * @param Declaration $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Declaration $entity)
    {
        $form = $this->createForm(new DeclarationType(), $entity, array(
            'action' => $this->generateUrl('declaration_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Declaration entity.
     *
     * @Route("/{id}", name="declaration_update")
     * @Method("PUT")
     * @Template("SVSBlueBundle:Declaration:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Declaration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Declaration entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('declaration_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Declaration entity.
     *
     * @Route("/{id}", name="declaration_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SVSBlueBundle:Declaration')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Declaration entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('declaration'));
    }

    /**
     * Creates a form to delete a Declaration entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('declaration_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
