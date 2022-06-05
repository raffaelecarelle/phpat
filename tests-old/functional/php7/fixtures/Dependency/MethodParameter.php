<?php

namespace Tests\PHPat\unit\php7\fixtures\Dependency;

use Tests\PHPat\unit\php7\fixtures\AnotherSimpleClass as AliasedClass;
use Tests\PHPat\unit\php7\fixtures\Inheritance;
use Tests\PHPat\unit\php7\fixtures\SimpleClass;

class MethodParameter
{
    public function doSomething(
        SimpleClass $simpleClass,
        AliasedClass $aliasedClass,
        DependencyNamespaceSimpleClass $dependencyNamespaceSimpleClass,
        Inheritance\InheritanceNamespaceSimpleClass $inheritanceNamespaceSimpleClass
    ) {
    }
}