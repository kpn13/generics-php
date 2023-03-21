<?php

namespace Kpn13\GenericsPhp\Contravariant;

/**
 * @template T of PaymentMean
 */
interface AsyncPaymentProcessor
{
	/**
	 * @param T $paymentMean
	 */
	public function processPayment(PaymentMean $paymentMean): void;
}
