<?php 

namespace OArafa\WillPayEasyNow;

class Payment
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

}