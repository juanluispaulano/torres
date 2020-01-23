<?php


namespace AppBundle\Form\Type;


use AppBundle\Entity\Jugador;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JugadorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Id')
            ->add('Nombre')
            ->add('Apellido')
            ->add('DNI')
            ->add('Nacionalidad')
            ->add('¿Es capitán?')
            ->add('¿Dado de baja?')
            ->add('Equipo del que forma parte');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver -> setDefaults([
            'data_class' => Jugador::class
        ]);
    }
}