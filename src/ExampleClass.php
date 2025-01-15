<?php

declare(strict_types=1);

namespace Ferror;

use DDTrace\Contracts\Span;
use DDTrace\ScopeManager;

final readonly class ExampleClass
{
    public function __construct(private Span $span)
    {
    }

    public function test(ScopeManager $scopeManager): void
    {
        $scopeManager->activate($this->span);
    }
}
