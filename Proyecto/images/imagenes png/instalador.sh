#!/bin/bash

USERDB="debianDB"
PASSDB="debianDB"
DATOS="proyecto.sql"
BBDD="proyecto"

mysqladmin -u $USERDB -p$USERDB create $BBDD
mysql -u $USERDB -p$USERDB $BBDD < $DATOS