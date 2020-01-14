<?php

/*
 * Este módulo foi desenvolvido por EximiaWeb
 */

namespace Payment\Adapter\Payment;

/**
 * Interface de pagamento com os adapters
 * @author Rodrigo Teixeira Andreotti <ro.andriotti@gmail.com>
 */
interface PaymentAdapterInterface
{
    public function addProduct(\Payment\Generic\ProductInterface $product, $currency = 'BRL');
    public function setPayer(\Payment\Generic\Payer $payer);
    public function setReference(string $codReferenc);
    
    public function pay();
}
