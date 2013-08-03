<?php

namespace CollDev\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CollDev\MainBundle\Entity\ShipmentMethods;
use CollDev\MainBundle\Form\ShipmentMethodsType;

/**
 * ShipmentMethods controller.
 *
 * @Route("/shipmentmethods")
 */
class ShipmentMethodsController extends Controller
{

    /**
     * Lists all ShipmentMethods entities.
     *
     * @Route("/", name="shipmentmethods")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CollDevMainBundle:ShipmentMethods')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ShipmentMethods entity.
     *
     * @Route("/", name="shipmentmethods_create")
     * @Method("POST")
     * @Template("CollDevMainBundle:ShipmentMethods:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ShipmentMethods();
        $form = $this->createForm(new ShipmentMethodsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shipmentmethods_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new ShipmentMethods entity.
     *
     * @Route("/new", name="shipmentmethods_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShipmentMethods();
        $form   = $this->createForm(new ShipmentMethodsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ShipmentMethods entity.
     *
     * @Route("/{id}", name="shipmentmethods_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CollDevMainBundle:ShipmentMethods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShipmentMethods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ShipmentMethods entity.
     *
     * @Route("/{id}/edit", name="shipmentmethods_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CollDevMainBundle:ShipmentMethods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShipmentMethods entity.');
        }

        $editForm = $this->createForm(new ShipmentMethodsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ShipmentMethods entity.
     *
     * @Route("/{id}", name="shipmentmethods_update")
     * @Method("PUT")
     * @Template("CollDevMainBundle:ShipmentMethods:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CollDevMainBundle:ShipmentMethods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShipmentMethods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ShipmentMethodsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shipmentmethods_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ShipmentMethods entity.
     *
     * @Route("/{id}", name="shipmentmethods_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CollDevMainBundle:ShipmentMethods')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ShipmentMethods entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shipmentmethods'));
    }

    /**
     * Creates a form to delete a ShipmentMethods entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
