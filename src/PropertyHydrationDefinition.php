<?php

declare(strict_types=1);

namespace EventSauce\ObjectHydrator;

use BackedEnum;

use function array_filter;
use function array_reverse;
use function is_a;

/**
 * @internal
 */
final class PropertyHydrationDefinition
{
    public function __construct(
        /** @var array<string, array<string>> */
        public array $keys,
        public string $accessorName,
        public array $casters,
        public PropertyType $propertyType,
        public bool $canBeHydrated,
        public bool $isEnum,
        public bool $nullable,
        public ?string $firstTypeName,
    ) {
    }

    public function isBackedEnum(): bool
    {
        return $this->propertyType->isBackedEnum();
    }
}
