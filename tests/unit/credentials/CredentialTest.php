<?php

namespace perf2k2\direct\tests\unit\credentials;

use perf2k2\direct\credentials\Credential;
use perf2k2\direct\credentials\CredentialInterface;
use PHPUnit\Framework\TestCase;

class CredentialTest extends TestCase
{
    /**
     * @var CredentialInterface
     */
    protected static $credential;

    public static function setUpBeforeClass()
    {
        self::$credential = new Credential('token', 'login', 'master');
    }

    public function testGetAuthToken()
    {
        $this->assertEquals('token', self::$credential->getAuthToken());
    }

    public function testGetSandboxMasterToken()
    {
        $this->assertEquals('master', self::$credential->getSandboxMasterToken());
    }

    public function testGetClientLogin()
    {
        $this->assertEquals('login', self::$credential->getClientLogin());
    }

    public function testIsSandboxMasterTokenSpecified()
    {
        $this->assertTrue(self::$credential->isSandboxMasterTokenSpecified());
    }
}