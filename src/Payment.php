<?php 

namespace OArafa\WillPayEasyNow;

use Composer\Plugin\PluginInterface;
use Composer\Composer;
use Composer\IO\IOInterface;

class Payment implements PluginInterface
{
	protected $availableGateways = ['paypal', 'stripe', 'bank'];

    // Caller must provide the payment gateway
    public function pay($gateway)
    {
        // Check if the gateway is available
        if (!in_array($gateway, $this->availableGateways)) {
            throw new \InvalidArgumentException('Invalid payment gateway. Available gateways: ' . implode(', ', $this->availableGateways));
        }

        // Example processing logic for different gateways
        switch ($gateway) {
            case 'paypal':
                return $gateway;
            case 'stripe':
                return $gateway;
            case 'bank':
               return $gateway;
            default:
                throw new \InvalidArgumentException('Unsupported payment gateway.');
        }
    }
	
	public function activate(Composer $composer, IOInterface $io)
    {
        // Plugin activation logic
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // Plugin deactivation logic
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // Plugin uninstall logic
    }

}