<?php

namespace App\Twig\Components;

use App\Dto\ValueObject;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class WithoutValidator
{
    use DefaultActionTrait;

    public ?ValueObject $value = null;
}
