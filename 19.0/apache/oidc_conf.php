'allow_user_to_change_display_name' => false,
'lost_password_link' => 'disabled',
'oidc_login_provider_url' => 'https://sso-beta.apps.dos-cloud.lan.croz.net/auth/realms/nextcloud-users',
'oidc_login_disable_registration' => true,
'oidc_login_client_id' => 'nextcloud-client',
'oidc_login_client_secret' => '5ec68891-307b-4718-a53c-126ac4c90c58',
'oidc_login_auto_redirect' => true,
'oidc_login_redir_fallback' => true,
'oidc_login_logout_url' => 'https://sso-beta.apps.dos-cloud.lan.croz.net/auth/realms/nextcloud-users/protocol/openid-connect/logout?redirect_uri=https%3A%2F%2Fbeta-cloud.apps.dos-cloud.lan.croz.net%2F',
'oidc_login_default_quota' => '50000000000',
'oidc_login_default_group' => 'SVI',
'oidc_login_button_text' => 'CROZ SSO',
'oidc_login_attributes' => array(
	'id' => 'sub',
	'mail' => 'email',
    'name' => 'name',
    'mail' => 'mail',
    'home' => 'homeDirectory',
    'groups' => 'group-claim'
),
// If you are running Nextcloud behind a reverse proxy, make sure this is set
'overwriteprotocol' => 'https',
// Set OpenID Connect scope
'oidc_login_scope' => 'openid profile',