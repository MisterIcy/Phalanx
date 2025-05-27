<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules(
        [
            '@PSR12' => true
        ]
        )
    ->setFinder($finder);