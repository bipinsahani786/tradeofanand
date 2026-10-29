<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>New Website Enquiry – Trade of Anand</title>
</head>
<body style="margin: 0; padding: 24px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #F4F2EE; color: #2B3440;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background: #FFFFFF; border: 1px solid #DAD6CE;">
        <!-- Header -->
        <tr>
            <td style="padding: 24px 32px; background: #12202F; border-bottom: 4px solid #C8861A;">
                <h1 style="margin: 0; font-size: 20px; font-weight: 700; color: #FFFFFF; letter-spacing: 0.5px;">TRADE OF ANAND</h1>
                <p style="margin: 4px 0 0 0; font-size: 13px; color: rgba(255, 255, 255, 0.7);">नई वेबसाइट पूछताछ / New Website Enquiry Notification</p>
            </td>
        </tr>

        <!-- Intro -->
        <tr>
            <td style="padding: 24px 32px 16px 32px;">
                <p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #12202F;">
                    नमस्ते! वेबसाइट संपर्क फ़ॉर्म से एक नया संदेश प्राप्त हुआ है:
                </p>
            </td>
        </tr>

        <!-- Lead Details Table -->
        <tr>
            <td style="padding: 0 32px 24px 32px;">
                <table role="presentation" width="100%" cellpadding="10" cellspacing="0" style="border-collapse: collapse; border: 1px solid #DAD6CE; font-size: 14px;">
                    <tr style="background: #F4F2EE; border-bottom: 1px solid #DAD6CE;">
                        <td width="35%" style="font-weight: 600; color: #12202F;">नाम (Name):</td>
                        <td style="color: #2B3440; font-weight: 700;">{{ $enquiry->name }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #DAD6CE;">
                        <td style="font-weight: 600; color: #12202F;">फ़ोन (Phone):</td>
                        <td>
                            <a href="tel:+91{{ preg_replace('/[^0-9]/', '', $enquiry->phone) }}" style="color: #1F3A5F; font-weight: 700; text-decoration: none;">
                                +91 {{ $enquiry->phone }}
                            </a>
                        </td>
                    </tr>
                    <tr style="background: #F4F2EE; border-bottom: 1px solid #DAD6CE;">
                        <td style="font-weight: 600; color: #12202F;">ईमेल (Email):</td>
                        <td>{{ $enquiry->email ?: 'प्रदान नहीं किया गया (Not provided)' }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #DAD6CE;">
                        <td style="font-weight: 600; color: #12202F;">इच्छित सेवा (Service):</td>
                        <td style="color: #C8861A; font-weight: 700;">{{ $enquiry->service ?: 'सामान्य पूछताछ (General Enquiry)' }}</td>
                    </tr>
                    <tr style="background: #F4F2EE; border-bottom: 1px solid #DAD6CE;">
                        <td style="font-weight: 600; color: #12202F; vertical-align: top;">संदेश (Message):</td>
                        <td style="color: #2B3440; line-height: 1.6; white-space: pre-wrap;">{{ $enquiry->message }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600; color: #6B7280; font-size: 12px;">समय एवं IP:</td>
                        <td style="color: #6B7280; font-size: 12px;">{{ $enquiry->created_at->format('d M Y, h:i A') }} (IP: {{ $enquiry->ip_address }})</td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Quick Action Buttons -->
        <tr>
            <td style="padding: 0 32px 32px 32px;">
                <table role="presentation" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
                    <tr>
                        <td style="padding-right: 12px;">
                            <a href="tel:+91{{ preg_replace('/[^0-9]/', '', $enquiry->phone) }}" style="display: inline-block; padding: 10px 20px; background: #1F3A5F; color: #FFFFFF; font-size: 14px; font-weight: 600; text-decoration: none; border-radius: 2px;">
                                📞 अभी कॉल करें
                            </a>
                        </td>
                        <td>
                            <a href="https://wa.me/91{{ preg_replace('/[^0-9]/', '', $enquiry->phone) }}?text={{ rawurlencode('नमस्ते ' . $enquiry->name . ', Trade of Anand से संपर्क करने के लिए धन्यवाद।') }}" style="display: inline-block; padding: 10px 20px; background: #1FA855; color: #FFFFFF; font-size: 14px; font-weight: 600; text-decoration: none; border-radius: 2px;">
                                💬 WhatsApp करें
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding: 16px 32px; background: #F4F2EE; border-top: 1px solid #DAD6CE; text-align: center; font-size: 12px; color: #6B7280;">
                <p style="margin: 0;">TRADE OF ANAND (Formerly M/S Sanjeev Kumar Suman)</p>
                <p style="margin: 4px 0 0 0;">Mushrigharari, Samastipur, Bihar</p>
            </td>
        </tr>
    </table>
</body>
</html>
