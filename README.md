# Quicksilver Composer Installer #

Creates a new "type" in Composer for `quicksilver-modules` so you can treat them separately in Composer installations.  This allows you to include Quicksilver scripts as part of a composer based project on Pantheon[https://pantheon.io].

## Example composer.json file ##

```
{
  "require": {
    "rvtraveller/qs-revert-all-features-d7": "1.0"
  },
  "extra": {
    "installer-paths": {
      "web/private/scripts/quicksilver/{$name}": ["type:quicksilver-module"]
    }
  }
}
```
