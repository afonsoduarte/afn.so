#!/bin/sh

cat work-a.json | jq '.[] | .screenurl' --raw-output | webkit2png -C --clipwidth=1400 --clipheight=2000 -s 1 -D screens -