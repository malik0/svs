<?php

namespace SVS\BlueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SVS\BlueBundle\Entity\Red;
use SVS\BlueBundle\Form\RedType;

/**
 * Red controller.
 *
 * @Route("/dashboard2")
 */
class RedController extends Controller
{

    /**
     * Lists all Red entities.
     *
     * @Route("/", name="dashboard")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SVSBlueBundle:Red')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Red entity.
     *
     * @Route("/", name="dashboard_create")
     * @Method("POST")
     * @Template("SVSBlueBundle:Red:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Red();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Red entity.
     *
     * @param Red $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Red $entity)
    {
        $form = $this->createForm(new RedType(), $entity, array(
            'action' => $this->generateUrl('dashboard_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Red entity.
     *
     * @Route("/new", name="dashboard_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Red();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Red entity.
     *
     * @Route("/{id}", name="dashboard_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Red')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Red entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Red entity.
     *
     * @Route("/{id}/edit", name="dashboard_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Red')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Red entity.');
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
    * Creates a form to edit a Red entity.
    *
    * @param Red $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Red $entity)
    {
        $form = $this->createForm(new RedType(), $entity, array(
            'action' => $this->generateUrl('dashboard_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Red entity.
     *
     * @Route("/{id}", name="dashboard_update")
     * @Method("PUT")
     * @Template("SVSBlueBundle:Red:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SVSBlueBundle:Red')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Red entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('dashboard_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Red entity.
     *
     * @Route("/{id}", name="dashboard_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SVSBlueBundle:Red')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Red entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dashboard'));
    }

    /**
     * Creates a form to delete a Red entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dashboard_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
