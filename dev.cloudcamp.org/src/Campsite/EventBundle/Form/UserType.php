<?php

namespace Campsite\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('first_name','text' ,array('required'=>true))
            ->add('last_name','text' ,array('required'=>true))
            ->add('address','text' ,array('required'=>true))
            ->add('city','text' ,array('required'=>true))
            ->add('state','text' ,array('required'=>true))
            ->add('zipcode','text' ,array('required'=>true))
            ->add('country','text' ,array('required'=>true))
            ->add('job_title','text' ,array('required'=>true))
            ->add('company','text' ,array('required'=>true))
            ->add('website','text' ,array('required'=>true))
            ->add('blog','text' ,array('required'=>true))
        ;
    }

    public function getName()
    {
        return 'campsite_eventbundle_usertype';
    }
}
