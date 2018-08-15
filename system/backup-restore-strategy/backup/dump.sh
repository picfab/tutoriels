#!/bin/sh
  
# Dump de la base de donnée de "Paris"
  
HOST="paris"
DATABASE="PARIS_DB"
USER="user_paris"
PASSWORD="password_paris"
DUMP_SQL_PARIS="dump_paris.sql"
DUMP_ZIP_PARIS="dump_paris.sql.gz"
DUMP_FOLDER="/home/dump"
  
# Dump de la base de donnée
mysqldump --host=${HOST} --user=${USER} --password=${PASSWORD} ${DATABASE} > ${DUMP_FOLDER}/${DUMP_SQL_PARIS};
  
# Zip du dump
gzip ${DUMP_FOLDER}/${DUMP_SQL_PARIS}
  
# Afficher le resultat
echo "La base de donnée ${DATABASE} a bien été sauvegardée et zippée:"
ls -l ${DUMP_FOLDER}/${DUMP_ZIP_PARIS}
