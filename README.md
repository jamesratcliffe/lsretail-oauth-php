# lsretail-oauth

This is a very basic PHP web application that will generate an authorization endpoint URL to connect and OAuth client to a Lightspeed Retail account and accept a temporary token from the Retail OAuth server and use it to request an access token.

## Configuration

Your OAuth Client's client ID, client secret and redirect URI are stored in the file config.php as an associative array.

```php
<?php

return [
	'clientID' => 'lsretailapp',
	'clientSecret' => 'supersecret123',
	'redirectURI' => 'https://www.lightspeedhq.com'
];

```

## Generating the Authorization Endpoint URL

On the main page (index.html) you can select the scope you want to request. Clicking "Generate URL" will just show the URL; clicking "Link Client" generate the URL and open it.

## Accepting the Temp Token

If you point your redirect URI to temp-token.php, it will use it to request an OAuth access token and display the reponse.
