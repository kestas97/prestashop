<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.logger.handler.factory' shared service.

return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.7', $this->targetDirs[3]))) && false ?: '_'}->getPath(), ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->load('getPsCheckout_Logger_FilenameService.php')) && false ?: '_'}->get(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->load('getPsCheckout_Logger_ConfigurationService.php')) && false ?: '_'}->getMaxFiles(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->load('getPsCheckout_Logger_ConfigurationService.php')) && false ?: '_'}->getLevel());
