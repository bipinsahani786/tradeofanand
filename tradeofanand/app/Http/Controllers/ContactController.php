<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEnquiryRequest;
use App\Mail\EnquiryNotification;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact', [
            'services' => config('site.services'),
            'seo' => [
                'title'       => 'Contact Us – Trade of Anand | Samastipur, Bihar',
                'description' => 'Trade of Anand से संपर्क करें। Phone: 9973974722. Address: Mushrigharari, Samastipur, Bihar. Enquiry form available online.',
                'canonical'   => route('contact.show'),
            ],
        ]);
    }

    public function submit(ContactEnquiryRequest $request): RedirectResponse
    {
        // Honeypot spam check
        if ($request->filled('honeypot')) {
            return redirect()->route('contact.show')->with('success', 'आपका संदेश प्राप्त हो गया है।');
        }

        $enquiry = Enquiry::create([
            'name'       => $request->input('name'),
            'phone'      => $request->input('phone'),
            'email'      => $request->input('email'),
            'service'    => $request->input('service'),
            'message'    => $request->input('message'),
            'honeypot'   => $request->input('honeypot'),
            'ip_address' => $request->ip(),
            'status'     => 'new',
        ]);

        // Send notification mail to admin (silently fail if mail not configured)
        try {
            Mail::to(config('site.email_primary'))->send(new EnquiryNotification($enquiry));
        } catch (\Throwable) {
            // Mail not configured – log only, do not break UX
        }

        return redirect()->route('contact.show')->with('success', 'आपका संदेश प्राप्त हो गया। हम जल्द ही आपसे संपर्क करेंगे। / Your enquiry has been received. We will contact you soon.');
    }
}
