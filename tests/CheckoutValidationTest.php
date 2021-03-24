<?php

namespace Tests;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckoutValidationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function test_without_different_BillingAddress()
    {
	    $response = $this->post(route('/checkout'), [
		    'firstNameDelivery' => 'Hans',
		    'lastNameDelivery' => 'Muster',
		    'addressDelivery' => 'Musterstrasse 9',
		    'postCodeDelivery' => '3930',
            'cityDelivery' => 'Visp'
	    ]);
	    $response->assertSessionHasNoErrors();
    }

    /**
     * @test
     */
    public function test_with_different_BillingAddress()
    {
	    $response = $this->post(route('/checkout'), [
		    'firstNameDelivery' => 'Hans',
		    'lastNameDelivery' => 'Muster',
		    'addressDelivery' => 'Musterstrasse 9',
		    'postCodeDelivery' => '3922',
            'hasDifferentAddress' => true,
            'firstNameBilling' => 'Maria',
            'lastNameBilling' => 'Locher',
            'addressBilling' => 'Teststrasse 10',
            'postCodeBilling' => '3922',
            'cityBilling' => 'Stalden',
	    ]);
	    $response->assertSessionHasNoErrors();
    }

}
