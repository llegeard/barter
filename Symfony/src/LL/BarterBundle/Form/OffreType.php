<?php

namespace LL\BarterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre', 'text', array('required' => true))
                ->add('description', 'textarea')
                ->add('montant', 'integer', array(
                    'data' => '0'
                ))
                ->add('devis', 'hidden', array(
                    'data' => '0'
                ))
                ->add('barter', 'hidden', array(
                    'data' => '100'
                ))
                ->add('published', 'hidden', array('required' => false))
                ->add('category', 'entity', array(
                    'class' => 'LLBarterBundle:Category',
                    'property' => 'name',
                    'multiple' => false,
                    'expanded' => false
                ))
                ->add('document', new DocumentType())
                ->add('ajouter', 'submit')

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'LL\BarterBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'll_barterbundle_offre';
    }

}
