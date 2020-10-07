<?php

namespace App\Form;

use App\Entity\Property;
// use Artgris\Bundle\MediaBundle\Form\Type\MediaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Artgris\Bundle\MediaBundle\Form\Type\MediaType;
use Artgris\Bundle\MediaBundle\Form\Type\MediaCollectionType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('surface')
            
            ->add('rooms')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('heat',ChoiceType::class,[
                'choices'=>$this->getChoices()
            ])
            ->add('city')
            ->add('adress')
            ->add('postal_code')
            ->add('sold')
            // ->add('image',ImageType::class, [
            //     'label'=>false])
            ->add('image', MediaType::class, [
                'conf' => 'default',
                'help' => 'Images (conf: default)',
                'required' => true,
//                'crop_options' => [
//                    'display_crop_data' => false,
//                    'allow_flip' => false,
//                    'allow_rotation' => true,
//                    'ratio' => 1.3
//                ],
            ])
                ->add('gallery', MediaCollectionType::class, [
                    'conf' => 'default',
                    'help' => "Images collection (conf: default)",
                ])
            ->add('save',SubmitType::class,array(
                'label'=>'Save'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }

    public function getChoices(){
        $choices = Property::HEAT;
        $output=[];
        foreach($choices as $k => $v){
            $output[$v]=$k;
        }
        return $output;
    }
}
