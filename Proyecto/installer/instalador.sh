#!/bin/bash

USERDB=$1
PASSDB=$2
DATOS="proyecto.sql"
BBDD=$3

mysqladmin -u $USERDB -p$USERDB create $BBDD
mysql -u $USERDB -p$USERDB $BBDD < $DATOS