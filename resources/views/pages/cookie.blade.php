@extends('layouts.homelayout')

@section('title', 'Cookie Policy - WB-DIGITECH')

@section('content')
<div class="content-wrapper" style="margin-top: 120px;"> <!-- adjust 120px to your header height -->
    <div class="container py-5">
        <h1 class="mb-4">Cookie Policy</h1>

        <p>
            Trusted Digital Marketing Agency Dubai. WB-DigiTech offers Digital Marketing Services including SEO, Web Development, Social Media Marketing &amp; more. Contact us for more information.
        </p>

        <h2>EU Cookie Consent</h2>
        <p>
            To use this website we are using Cookies and collecting some Data. To be compliant with the EU GDPR we give you the choice to allow us to use certain Cookies and to collect some Data.
        </p>

        <h2>Essential Data</h2>
        <p>
            The Essential Data is needed to run the Site you are visiting technically. You cannot deactivate them.
        </p>

        <ul>
            <li>
                <strong>Session Cookie:</strong> PHP uses a Cookie to identify user sessions. Without this Cookie, the Website will not work.
            </li>
            <li>
                <strong>XSRF-Token Cookie:</strong> Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.
            </li>
        </ul>
    </div>
</div>
@endsection
