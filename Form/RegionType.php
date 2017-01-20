<?php

namespace ModnarLluf\FranceGeoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegionType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Auvergne-Rhône-Alpes'        => 'Auvergne-Rhône-Alpes',
                'Bourgogne-France-Comté'      => 'Bourgogne-France-Comté',
                'Bretagne'                    => 'Bretagne',
                'Centre-Val de Loire'         => 'Centre-Val de Loire',
                'Corse'                       => 'Corse',
                'Grand Est'                   => 'Grand Est',
                'Hauts-de-France'             => 'Hauts-de-France',
                'Île-de-France'               => 'Île-de-France',
                'Normandie'                   => 'Normandie',
                'Nouvelle-Aquitaine'          => 'Nouvelle-Aquitaine',
                'Occitanie'                   => 'Occitanie',
                'Pays de la Loire'            => 'Pays de la Loire',
                'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
            ],
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
