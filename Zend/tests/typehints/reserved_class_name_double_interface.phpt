--TEST--
'double' cannot be used as a class, interface or trait name - interface
--FILE--
<?php

interface double {}
--EXPECTF--
Fatal error: Cannot use 'double' as class name as it is reserved in %s on line %d