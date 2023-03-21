<?php

namespace Kpn13\GenericsPhp\Contravariant;

/**
 * @implements AsyncPaymentProcessor<BankTransfert>
 */
class BankTransfertPaymentProcessor implements AsyncPaymentProcessor
{
	public function processPayment(PaymentMean $paymentMean): void
	{

	}
}

