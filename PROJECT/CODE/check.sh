#!/bin/sh
set -x
../../../../TOOL/CHYLE/chyle --include "../www/static/style.css" --include "../www/VIEW//*.php" --unused --missing --verbose
