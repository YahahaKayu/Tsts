#!/bin/bash
dir="/var/www/html/assets/log/toto/"
if [ ! -d $dir ]
then
    mkdir $dir
    chmod 755 $dir
fi
