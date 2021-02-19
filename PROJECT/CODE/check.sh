#!/bin/sh
set -x
../../../../TOOL/CYLUS/cylus --include "../www/static/style.css" --include "../www/VIEW//*.php" --unused --missing --verbose
