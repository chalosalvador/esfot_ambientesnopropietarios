#!/bin/bash

# This script (re-)generates .pot file from .py files in the entire plug-in.
#
# Arguments:
# $1 - plug-in version

PROGNAME="$(basename "$0")"
PLUGIN_NAME='export_layers'

if [ -z "$1" ]; then
   echo "$PROGNAME: error: version must be specified"
   exit 1
fi

plugin_version="$1"

INPUT_DIRECTORY='../..'
OUTPUT_FILE='./'"$PLUGIN_NAME"'-'"$plugin_version"'.pot'
AUTHOR_NAME='khalim19'
AUTHOR_MAIL='khalim19@gmail.com'

find "$INPUT_DIRECTORY" -type f -iname '*.py' | \
xargs xgettext --language=Python --keyword='_' --keyword='N_' --package-name="$PLUGIN_NAME" --package-version="$plugin_version" --copyright-holder="$AUTHOR_NAME" --msgid-bugs-address="$AUTHOR_MAIL" --output="$OUTPUT_FILE" --from-code='UTF-8'

sed -i '
  s/\(This file is distributed under the same license as the\) PACKAGE \(package\.\)/\1 '\'"$PLUGIN_NAME"\'' \2/
  s/\(Content-Type: text\/plain; charset\)=CHARSET/\1=UTF-8/
' "$OUTPUT_FILE"

