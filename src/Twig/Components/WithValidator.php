<?php

namespace App\Twig\Components;

use App\Dto\ValueObject;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\ValidatableComponentTrait;

#[AsLiveComponent]
final class WithValidator
{
    use DefaultActionTrait;
    use ValidatableComponentTrait;

    #[Assert\Valid]
    public ?ValueObject $value = null;
}
