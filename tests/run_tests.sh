#!/bin/sh

#
# File: run_tests.sh
# 
# Nicolas Dubois <ndubois@amg-dev.fr>
# SVN: $Id$
# Copyright © 2011 GPdis - AMG Développement
#

php phpunit.php --bootstrap bootstrap.php --colors --verbose .
