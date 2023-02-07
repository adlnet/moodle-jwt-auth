## Moodle JWT Auth

Simple auth plugin for handling an inbound JWT header and automatically creating an account for that user.  

**Disclaimer:** This plugin:
- Is in active development.
- Is not safe for general public use.
- Assumes that all traffic to your Moodle instance has already been secured.

There is a straightforward issuer + client check, but that is it.

## Installation

Aside from importing the release zip through the Moodle admin page, your Moodle instance must also include two environment variables:

- `MOODLE_JWT_ISSUER`: The authority issuing the expected JWTs.
- `MOODLE_JWT_CLIENT`: The client ID for your SSO realm.

Once those are in-place, the protected instance should be capable of creating users and logging them in automatically.  Automatic enrolment is a different topic, and there are existing plugins to handle that etc.
