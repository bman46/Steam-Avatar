# Steam-Avatar
[![Build Status](https://travis-ci.com/bman46/Steam-Avatar.svg?branch=master)](https://travis-ci.com/bman46/Steam-Avatar)

A PHP program meant to get a full size avatar of a user from there Steam ID.
## Usage:
Call the function using `getAvatar("Steam ID")` and the returning value will be the URL to the image.
## Notes:
On production website(s) remember to cache content as you will quickly run out of API calls as one is used everytime the `getAvatar()` function is called.
