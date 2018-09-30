#!/bin/bash

HOMEDIR=/Users/swiftb
INSTDIR=$HOMEDIR/Sites
SRCDIR=$HOMEDIR/dev/BrewReviews
FILES='testform.html insert_brewreview.php'

for i in $FILES; do
    echo "Removing $INSTDIR/$i"
    rm -f $INSTDIR/$i
    echo "Copying $SRCDIR/$i to $INSTDIR/$i"
    cp $SRCDIR/$i $INSTDIR/$i
done

echo "Installation complete"



