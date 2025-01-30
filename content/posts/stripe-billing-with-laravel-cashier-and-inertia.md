---
title: 'Stripe Billing with Laravel Cashier and Inertia'
slug: 'stripe-billing-with-laravel-cashier-and-inertia'
published_at: '2025-01-30'
category: 'programming'
---

I'm building a pretty standard SaaS app with Laravel, Vue, and Inertia. I'm leveraging Stripe's [billing](https://stripe.com/en-ca/billing) features, and fortunately [Cashier](https://laravel.com/docs/11.x/billing) makes this incredibly simple.

The only wrinkle is that server side redirects to billing.stripe.com domains which are used to collect payments, result in XHR errors when using Inertia. If you follow the Cashier quickstart, it won't quite work properly with Inertia.

# The Problem

If you follow Cashier's quickstart you'll likely create the following route. When someone is going to subscribe to your SaaS you will hit this route, and the user will be redirected to Stripe to enter their payment details.

``` php
use Illuminate\Http\Request;
 
Route::get('/subscription-checkout', function (Request $request) {
    return $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
});
```

If you're building an app with Inertia you will run into a XHR issue as users get directed to the `/subscription-checkout` URL in your app, and then pass you along to Stripe. Stripe will reject this redirect, and users won't be sent to the checkout page.

# The Solution

Without Interia this is a pretty annoying problem. You would need to pull in the [StripeJS](https://docs.stripe.com/js) package, generate checkout sessions in the backend, pass their IDs to the front end and then generate a redirect on the client side. Doing this gets pretty complicated.

Fortunately Inertia makes this really simple. Inertia has a helper that allows you to trigger a client side redirect, from the server side 🤯.

This means you can keep your app simple by managing all of your routing from the server side. You just need to modify the earlier code slightly to leverage the Inertia helper.

``` php
use Illuminate\Http\Request;
use Inertia\Inertia;
 
Route::get('/subscription-checkout', function (Request $request) {
    $checkout = $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
    
    return Inertia::location($checkout->url);
});
```

Instead of returning the checkout and triggering a server side redirect we simply store the checkout object as a variable. This still creates a checkout session with Stripe, which we then extract the URL from, and tell Inertia to make a client side redirect to that URL, avoiding the XHR problem.

# Solving Redirect to Billing

The same approach we used to fix XHR errors in the checkout flow can be used to fix errors redirecting to the billing portal on Stripe as well. You just need to make use of the `->billingPortalUrl()` method.

``` php
use Illuminate\Http\Request;
use Inertia\Inertia;
 
Route::get('/subscription-checkout', function (Request $request) {
    {
        $url = $request->user()->billingPortalUrl(route('dashboard'));

        Inertia::location($url);
    }
});
```
