#!/bin/sh
set -x
../../../../TOOL/PHYX/phyx --newline --include ".//*.phx"
../../../../TOOL/PHYX/phyx --newline --media --style --include ".//*.pht" --include ".//*.styl"
