<?php


namespace Tests\Listener;


use DG\BypassFinals;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\Warning;

final class BypassFinalListener implements TestListener
{
    public function addError(Test $test, \Exception $t, $time)
    {
    }

    public function addWarning(Test $test, Warning $e, $time)
    {
    }

    public function addFailure(Test $test, AssertionFailedError $e, $time)
    {
    }

    public function addIncompleteTest(Test $test, \Exception $t, $time)
    {
    }

    public function addRiskyTest(Test $test, \Exception $t, $time)
    {
    }

    public function addSkippedTest(Test $test, \Exception $t, $time)
    {
    }

    public function startTestSuite(TestSuite $suite)
    {
    }

    public function endTestSuite(TestSuite $suite)
    {
    }

    public function startTest(Test $test)
    {
        BypassFinals::enable();
    }

    public function endTest(Test $test, $time)
    {
    }
}