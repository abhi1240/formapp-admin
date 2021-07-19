<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */

class EcommerceController extends Controller
{
    /**
     * Display a products of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Shop products';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.products', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a product list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function productList(){

        $pageTitle = 'Product List';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.product_list', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a product details of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function productDetails(){

        $pageTitle = 'Products Details';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.product_details', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a add product of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function addProduct(){

        $pageTitle = 'Add Product';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.add_product', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a edit product of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function editProduct(){

        $pageTitle = 'Edit Product';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.edit_product', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a cart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function cart(){

        $pageTitle = 'Product Cart';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.cart', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function checkout(){

        $pageTitle = 'Checkout';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.checkout', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a shipping address of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function shippingAddress(){

        $pageTitle = 'Shipping Address';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.shipping_address', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout payment of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function checkoutPayment(){

        $pageTitle = 'Checkout Payment';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.checkout_payment', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a checkout review of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function checkoutReview(){

        $pageTitle = 'Checkout Review';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.checkout_review', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a payment status of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function paymentStatus(){

        $pageTitle = 'Payment Status';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.payment_status', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a orders of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function orders(){

        $pageTitle = 'Orders';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.orders', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a sellers of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function sellers(){

        $pageTitle = 'Sellers';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.sellers', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a invoice of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function invoice(){

        $pageTitle = 'Invoice';
        $pageDescription = 'Some description for the page';

        return view('applications.ecommerce.invoice', compact('pageTitle', 'pageDescription'));
    }
}
