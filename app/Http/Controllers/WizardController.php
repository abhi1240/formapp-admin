<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Class WizardController
 * @package App\Http\Controllers
 */

class WizardController extends Controller
{
    /**
     * Display a wizard One of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  index(){

        $pageTitle = 'Wizard One';
        $pageDescription = 'Some description for the page';

        return view('wizard.wizard_one', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a Checkout2 Wizard One of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkout2WizardOne(){

        $pageTitle = 'Checkout2 Wizard One';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout2_wizard_one', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout payment wizard6 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutPaymentWizard6(){

        $pageTitle = 'Checkout2 Wizard One';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_payment_wizard6', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout Review wizard6 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutReviewWizard6(){

        $pageTitle = 'Checkout2 Wizard One';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_review_wizard6', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a payment status wizard6 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  paymentStatusWizard6(){

        $pageTitle = 'Payment Status Wizard6 One';
        $pageDescription = 'Some description for the page';

        return view('wizard.payment_status_wizard6', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a wizard two of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  wizardTwo(){

        $pageTitle = 'Wizard Two';
        $pageDescription = 'Some description for the page';

        return view('wizard.wizard_two', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a Checkout2 Wizard 7 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkout2Wizard7(){

        $pageTitle = 'Checkout2 Wizard 7';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout2_wizard7', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout payment wizard6 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutPaymentWizard7(){

        $pageTitle = 'Checkout2 Wizard 7';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_payment_wizard7', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout Review wizard6 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutReviewWizard7(){

        $pageTitle = 'Checkout2 Review Wizard 7';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_review_wizard7', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a payment status wizard7 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  paymentStatusWizard7(){

        $pageTitle = 'Payment Status Wizard 7 One';
        $pageDescription = 'Some description for the page';

        return view('wizard.payment_status_wizard7', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a wizard three of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  wizardThree(){

        $pageTitle = 'Wizard Three';
        $pageDescription = 'Some description for the page';

        return view('wizard.wizard_three', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a Checkout2 Wizard 8 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkout2Wizard8(){

        $pageTitle = 'Checkout2 Wizard 8';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout2_wizard8', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout payment wizard8 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutPaymentWizard8(){

        $pageTitle = 'Checkout2 Wizard 8';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_payment_wizard8', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout Review wizard8 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutReviewWizard8(){

        $pageTitle = 'Checkout2 Review Wizard 8';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_review_wizard8', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a payment status wizard8 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  paymentStatusWizard8(){

        $pageTitle = 'Payment Status Wizard 8 One';
        $pageDescription = 'Some description for the page';

        return view('wizard.payment_status_wizard8', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a wizard four of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  wizardFour(){

        $pageTitle = 'Wizard Four';
        $pageDescription = 'Some description for the page';

        return view('wizard.wizard_four', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a Checkout2 Wizard 9 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkout2Wizard9(){

        $pageTitle = 'Checkout2 Wizard 9';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout2_wizard9', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout payment wizard9 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutPaymentWizard9(){

        $pageTitle = 'Checkout2 Wizard 9';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_payment_wizard9', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout Review wizard9 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutReviewWizard9(){

        $pageTitle = 'Checkout2 Review Wizard 9';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_review_wizard9', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a payment status wizard9 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  paymentStatusWizard9(){

        $pageTitle = 'Payment Status Wizard 9 One';
        $pageDescription = 'Some description for the page';

        return view('wizard.payment_status_wizard9', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a wizard five of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  wizardFive(){

        $pageTitle = 'Wizard Four';
        $pageDescription = 'Some description for the page';

        return view('wizard.wizard_five', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a Checkout2 Wizard 10 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkout2Wizard10(){

        $pageTitle = 'Checkout2 Wizard 10';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout2_wizard10', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout payment wizard10 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutPaymentWizard10(){

        $pageTitle = 'Checkout2 Wizard 10';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_payment_wizard10', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout Review wizard10 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  checkoutReviewWizard10(){

        $pageTitle = 'Checkout2 Review Wizard 10';
        $pageDescription = 'Some description for the page';

        return view('wizard.checkout_review_wizard10', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a payment status wizard10 of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function  paymentStatusWizard10(){

        $pageTitle = 'Payment Status Wizard 10 One';
        $pageDescription = 'Some description for the page';

        return view('wizard.payment_status_wizard10', compact('pageTitle', 'pageDescription'));
    }
}
