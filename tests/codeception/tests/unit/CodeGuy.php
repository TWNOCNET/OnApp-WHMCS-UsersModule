<?php
// This class was automatically generated by build task
// You can change it manually, but it will be overwritten on next build

use Codeception\Maybe;

class CodeGuy extends \Codeception\AbstractGuy
{
    
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::testMethod()
    */
    public function testMethod($signature) {
        $this->scenario->action('testMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::haveFakeClass()
    */
    public function haveFakeClass($instance) {
        $this->scenario->action('haveFakeClass', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::haveStub()
    */
    public function haveStub($instance) {
        $this->scenario->action('haveStub', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::executeTestedMethodOn()
    */
    public function executeTestedMethodOn($object) {
        $this->scenario->action('executeTestedMethodOn', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::executeTestedMethodWith()
    */
    public function executeTestedMethodWith($params) {
        $this->scenario->action('executeTestedMethodWith', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::executeTestedMethod()
    */
    public function executeTestedMethod() {
        $this->scenario->action('executeTestedMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::execute()
    */
    public function execute($code) {
        $this->scenario->action('execute', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::executeMethod()
    */
    public function executeMethod($object, $method) {
        $this->scenario->action('executeMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::changeProperties()
    */
    public function changeProperties($obj, $values = null) {
        $this->scenario->action('changeProperties', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::changeProperty()
    */
    public function changeProperty($obj, $property, $value) {
        $this->scenario->action('changeProperty', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeExceptionThrown()
    */
    public function seeExceptionThrown($classname, $message = null) {
        $this->scenario->assertion('seeExceptionThrown', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeMethodInvoked()
    */
    public function seeMethodInvoked($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodInvoked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeMethodInvokedOnce()
    */
    public function seeMethodInvokedOnce($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodInvokedOnce', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeMethodNotInvoked()
    */
    public function seeMethodNotInvoked($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodNotInvoked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeMethodInvokedMultipleTimes()
    */
    public function seeMethodInvokedMultipleTimes($mock, $method, $times, $params = null) {
        $this->scenario->assertion('seeMethodInvokedMultipleTimes', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeResultEquals()
    */
    public function seeResultEquals($value) {
        $this->scenario->assertion('seeResultEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeResultContains()
    */
    public function seeResultContains($value) {
        $this->scenario->assertion('seeResultContains', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::dontSeeResultContains()
    */
    public function dontSeeResultContains($value) {
        $this->scenario->action('dontSeeResultContains', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::dontSeeResultEquals()
    */
    public function dontSeeResultEquals($value) {
        $this->scenario->action('dontSeeResultEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeEmptyResult()
    */
    public function seeEmptyResult() {
        $this->scenario->assertion('seeEmptyResult', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeResultIs()
    */
    public function seeResultIs($type) {
        $this->scenario->assertion('seeResultIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seePropertyEquals()
    */
    public function seePropertyEquals($object, $property, $value) {
        $this->scenario->assertion('seePropertyEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seePropertyIs()
    */
    public function seePropertyIs($object, $property, $type) {
        $this->scenario->assertion('seePropertyIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeMethodReturns()
    */
    public function seeMethodReturns($object, $method, $value, $params = null) {
        $this->scenario->assertion('seeMethodReturns', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
   /**
    * This method is generated. DO NOT EDIT.
    *
    * @see \Codeception\Module\Unit::seeMethodNotReturns()
    */
    public function seeMethodNotReturns($object, $method, $value, $params = null) {
        $this->scenario->assertion('seeMethodNotReturns', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

