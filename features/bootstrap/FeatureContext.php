<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

/**
 * Behat context class.
 */
class FeatureContext implements SnippetAcceptingContext
{
    private $process;

    private $phpCli;

    private $workingDir;

    private $iterations;

    public function __construct()
    {
        $phpCliFinder = new PhpExecutableFinder();

        if (false === $phpCli = $phpCliFinder->find()) {
            throw new \RuntimeException('Unable to find the PHP executable.');
        }

        $this->workingDir = __DIR__.'/../..';
        $this->phpCli = $phpCli;
        $this->process = new Process(null);
    }

    /**
     * @Given I am in the FizzBuzz app directory
     */
    public function iAmInTheFizzBuzzDir()
    {
        $this->process->setWorkingDirectory($this->workingDir);
    }

    /**
     * @When I run :command
     */
    public function iRun($command)
    {
        $this->iterations = explode(' ', $command)[1];

        $this->process->setCommandLine(sprintf('%s %s', $this->phpCli, $command));

        $this->process->run();

    }

    /**
     * @Then it should print:
     */
    public function itShouldPrint(PyStringNode $expectedOutput)
    {
        if (!$this->process->isSuccessful()) {
            throw new \RuntimeException($this->process->getErrorOutput());
        }

        return \PHPUnit_Framework_Assert::assertEquals((string) $expectedOutput, $this->process->getOutput());
    }
}
