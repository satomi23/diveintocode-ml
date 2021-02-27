<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "7147c9fcdd14cdca12681d3670a37f63";
$scopes = "read_orders,write_products";
$redirect_uri = "https://github.com/satomi23/diveintocode-ml/edit/master/shopify-generating-api-token-guide-master/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
