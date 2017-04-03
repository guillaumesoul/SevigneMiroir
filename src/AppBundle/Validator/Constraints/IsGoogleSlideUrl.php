<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class IsGoogleSlideUrl extends Constraint
{
    public $message = 'La valeur "%string%" ne correspond pas à une url d\'une presentation google slide';
}