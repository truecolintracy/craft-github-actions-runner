<?php
/**
 * Github Actions Runner plugin for Craft CMS 3.x
 *
 * Run a github action remotely from inside Craft CMS
 *
 * @link      https://www.colintracy.com
 * @copyright Copyright (c) 2021 Colin Tracy
 */

namespace progressmfg\githubactionsrunnertests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use progressmfg\githubactionsrunner\GithubActionsRunner;

/**
 * ExampleUnitTest
 *
 *
 * @author    Colin Tracy
 * @package   GithubActionsRunner
 * @since     0.1.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            GithubActionsRunner::class,
            GithubActionsRunner::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
