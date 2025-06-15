@component('mail::message')
# Thank You for Your Purchase!

Dear {{ $order->customer_name }},

Your order has been successfully processed. Here are your order details:

@component('mail::panel')
**Order Number:** {{ $order->order_number }}<br>
**Date:** {{ $order->created_at->format('F j, Y') }}<br>
**Amount Paid:** ₹{{ number_format($order->amount, 2) }}
@endcomponent

## Product Details

@component('mail::panel')
**{{ $order->product->name }}**<br>
Digital Product<br>
File Size: {{ $order->product->formatted_file_size }}
@endcomponent

@component('mail::button', ['url' => $downloadUrl, 'color' => 'primary'])
Download Your Product
@endcomponent

## Important Information

- Your download link is unique to your purchase and will expire in 24 hours
- For security reasons, do not share this link with anyone
- You can always access your purchase from your account dashboard
- The download link in this email will expire at {{ now()->addHours(24)->format('F j, Y g:i A') }} (24 hours from now)

If you need any assistance or have questions about your purchase, our support team is here to help.

@component('mail::button', ['url' => route('contact'), 'color' => 'success'])
Contact Support
@endcomponent

Thank you for choosing our products!

Best regards,<br>
{{ config('app.name') }}

<small>If you did not make this purchase, please contact our support team immediately.</small>
@endcomponent 