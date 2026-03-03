<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry | Samar Infra</title>
    <style>
        body {
            font-family: 'Inter', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F3F4F6;
            -webkit-font-smoothing: antialiased;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #F3F4F6;
            padding-bottom: 40px;
        }

        .main {
            background-color: #FFFFFF;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            color: #111214;
        }

        .header {
            background-color: #111214;
            padding: 40px 20px;
            text-align: center;
            border-bottom: 4px solid #E10600;
        }

        .header h1 {
            color: #FFFFFF;
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .header .accent {
            color: #E10600;
        }

        .content {
            padding: 40px 30px;
        }

        .title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #111214;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .info-table td {
            padding: 12px 0;
            border-bottom: 1px solid #E5E7EB;
        }

        .label {
            font-size: 11px;
            font-weight: 700;
            color: #E10600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .value {
            font-size: 15px;
            font-weight: 600;
            color: #111214;
        }

        .message-box {
            background-color: #F8F9FA;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #E10600;
            font-style: italic;
            color: #4B5563;
            line-height: 1.6;
        }

        .footer {
            padding: 30px;
            text-align: center;
            font-size: 12px;
            color: #9CA3AF;
        }

        .footer p {
            margin: 5px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #E10600;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 700;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table class="main" align="center">
            <tr>
                <td class="header">
                    <h1>SAMAR <span class="accent">INFRA</span></h1>
                </td>
            </tr>
            <tr>
                <td class="content">
                    <div class="title">New Inquiry Received</div>
                    <p style="color: #6B7280; font-size: 14px; margin-bottom: 30px;">A new contact inquiry has been submitted through the Samar Infra website. Below are the details of the request.</p>

                    <table class="info-table">
                        <tr>
                            <td>
                                <div class="label">Full Name</div>
                                <div class="value">{{ $contact->name }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="label">Phone Number</div>
                                <div class="value">{{ $contact->phone }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="label">Inquiry Type</div>
                                <div class="value">{{ $contact->inquiry_type }}</div>
                            </td>
                        </tr>
                    </table>

                    <div class="label" style="margin-bottom: 10px;">Message Description</div>
                    <div class="message-box">
                        "{{ $contact->message }}"
                    </div>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <p>&copy; {{ date('Y') }} Samar Infra Pvt Ltd. All rights reserved.</p>
                    <p>NS VIP Complex, Greater Noida West, Noida – 201009</p>
                    <p><a href="{{ config('app.url') }}" style="color: #E10600; text-decoration: none; font-weight: 600;">Visit Website</a></p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>