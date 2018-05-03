<?php

/** 
 * These are defined using one of the reserved words public, protected,
 *  or private, followed by a normal variable statement. This declaration may
 *  include an initialization, but this initialization must be a constant
 *  value, i.e. it must be able to be evaluated during compilation and not
 *  depend on information generated during execution.
 */

class Classpublic
{

   public $var1 = 'Hello ' . 'world';

   public $var2 = <<<EOD
Hello world
EOD;

   public $var3 = 1+2;



   public $var6 = myConstant;
   public $var7 = array(true, false);


   public $var8 = <<<'EOD'
Hello world
EOD;

}
