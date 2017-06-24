<?php

namespace Yireo\ExampleSetupRecurring\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Psr\Log\LoggerInterface;

/**
 * Class Recurring
 * @package Yireo\ExampleSetupRecurring\Setup
 */
class Recurring implements InstallSchemaInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Recurring constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $message = 'Yireo_ExampleSetupRecurring version ' . $context->getVersion();
        $this->logger->notice($message);
    }
}
