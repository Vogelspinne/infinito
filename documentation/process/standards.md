The key words “MUST”, “MUST NOT”, “REQUIRED”, “SHALL”, “SHALL NOT”, “SHOULD”,
“SHOULD NOT”, “RECOMMENDED”, “MAY”, and “OPTIONAL” in this document are to be
interpreted as described in [RFC 2119](https://tools.ietf.org/html/rfc2119).

# standards

## coding standards

### php
PHP code MUST follow the [PSR-4](https://www.php-fig.org/psr/psr-4/) standard.

### twig
Twig templates MUST follow the [Symfony Template best practices](https://symfony.com/doc/current/best_practices/templates.html).

### naming

#### interfaces

A Interfaces MUST be named *ClassnameInterface*.

It SHOULD be based in the directory of the class.

#### abstract classes

A abstract class MUST be named *AbstractClassname*.

It SHOULD be based in the directory of the classes which inherit from it.

#### entities

##### source

A source MUST be named *SourcenameSource*.
