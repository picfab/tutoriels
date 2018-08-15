#!/bin/sh
  
# Restaure la base Paris
  
HOST="paris"
DATABASE="PARIS_DB"
USER="user_paris"
PASSWORD="password_paris"
DUMP_SQL_PARIS="dump_paris.sql"
DUMP_FOLDER="/home/dump"
  
# Resaure de la base de donnée
mysql --host=${HOST} --user=${USER} --password=${PASSWORD} ${DATABASE} < ${DUMP_FOLDER}/${DUMP_SQL_PARIS};
  
# Afficher le resultat
echo "La base de donnée ${DATABASE} a été restaurée avec succès";
