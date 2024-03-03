<?php

declare(strict_types=1);

namespace Dvdam\Core\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

/**
 * Class Devguide
 */
class Devguide extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    public const ADMIN_RESOURCE = 'Dvdam_Core::devguide';


    public function __construct(
        Context $context,
        RedirectFactory $resultRedirectFactory
    ) {
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResponseInterface|ResultInterface|void
     * @throws NotFoundException
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setUrl('https://devdocs.magento.com/guides/v2.4/coding-standards/technical-guidelines.html');
        return $resultRedirect;
    }
}

