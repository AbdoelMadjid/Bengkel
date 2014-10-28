<?php
/**
 * This file is part of Bengkel
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace AppBundle;

class AppEvent
{
    /**
     * Event ini dipanggil pada inisialisasi
     **/
    const ORDER_INITIALIZE = 'app.event.order.initialize';

    /**
     * Event ini dipanggil sesaat setelah menyimpan
     **/
    const ORDER_SUCCESS = 'app.event.order.success';

    /**
     * Event ini dipanggil sesaat sebelum response
     **/
    const ORDER_COMPLETE = 'app.event.order.complete';

    const MOVING_INITIALIZE = 'app.event.moving.initialize';

    const MOVING_SUCCESS = 'app.event.moving.success';

    const MOVING_COMPLETE = 'app.event.moving.complete';

    const PAYMENT_INITIALIZE = 'app.event.payment.initialize';

    const PAYMENT_SUCCESS = 'app.event.payment.success';

    const PAYMENT_COMPLETE = 'app.event.payment.complete';

    const STORING_INITIALIZE = 'app.event.storing.initialize';

    const STORING_SUCCESS = 'app.event.storing.success';

    const STORING_COMPLETE = 'app.event.storing.complete';

    const STOCK_OPNAME_INITIALIZE = 'app.event.opname.initialize';

    const STOCK_OPNAME_SUCCESS = 'app.event.opname.success';

    const STOCK_OPNAME_COMPLETE = 'app.event.opname.complete';
}