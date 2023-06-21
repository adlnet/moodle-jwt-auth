## Moodle JWT Auth

Simple auth plugin for handling an inbound JWT header and automatically creating an account for that user.  

**Disclaimer:** This plugin:
- Is in active development.
- Is not safe for general public use.
- Assumes that all traffic to your Moodle instance has already been secured.

There is a straightforward issuer + client check, but that is it.

## Installation

Aside from importing the release zip through the Moodle admin page, your Moodle instance **should** also include environment variables for confirming the JWT values:

- `MOODLE_JWT_CHECK_ISSUER`: Whether to check the JWT's issuer.
- `MOODLE_JWT_ISSUER`: The authority issuing the expected JWTs.
- `MOODLE_JWT_CHECK_CLIENT`: Whether to check the JWT's client.
- `MOODLE_JWT_CLIENT`: The client ID for your SSO realm.

The plugin can also handle username assignment, but this is usually for special situation where you'd like a specific property to be used.  Additionally, special characters can be removed through a regular expression.

- `MOODLE_JWT_USERNAME_PROPERTY`: The property you'd like to use for the username.
- `MOODLE_JWT_USERNAME_REGEX_REMOVAL`: The expression to match characters for removal from the username.

Once those are in-place, the protected instance should be capable of creating users and logging them in automatically.  Automatic enrolment is a different topic, and there are existing plugins to handle that etc.
