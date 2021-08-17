#!/bin/bash

pwd

cd /var/www
export HOME=/var/www
composer require -v -d /var/www symfony/polyfill-ctype
npm install gulp
exit $?
#exit 0

