# Docksal powered DKAN 7.x Installation

This is a sample vanilla DKAN 7.x installation pre-configured for use with Docksal. Based on https://github.com/docksal/boilerplate-drupal7-advanced.

Features:

- Vanilla DKAN 7.x
- `fin init` example

## Setup instructions

### Step #1: Docksal environment setup

**This is a one time setup - skip this if you already have a working Docksal environment.**  

Follow [Docksal environment setup instructions](https://github.com/docksal/docksal/blob/develop/docs/env-setup.md)
   
### Step #2: Project setup

1. Clone this repo into your Projects directory

2. Initialize the site

    This will initialize local settings and install the site via drush

    ```
    fin init
    ```

3. Point your browser to

    ```
    http://dkan7.docksal
    ```


## More automation with 'fin init'

Site provisioning can be automated using `fin init`, which calls the shell script in [.docksal/commands/init](.docksal/commands/init).  
This script is meant to be modified per project. The one in this repo will give you a good example of advanced init script.

Some common tasks that can be handled by the init script:

- initialize local settings files for Docker Compose, Drupal, Behat, etc.
- import DB or perform a site install
- compile Sass
- run DB updates, revert features, clear caches, etc.
- enable/disable modules, update variables values
- run Behat tests