#!/bin/sh
  
# Backup
  
DUMP_SSH_FILE="dump.sh"
RESTORE_SSH_FILE="restore.sh"
HOST_PARIS="paris"
HOST_LONDON="london"
HOST_NEW_YORK="new_york"
 
USER_PARIS="tchoulom"
USER_LONDON="london"
USER_NEW_YORK="new_york"
PASSWORD_PARIS="password_paris"
PASSWORD_LONDON="password_london"
PASSWORD_NEW_YORK="password_new_york"
 
DUMP_FOLDER="/home/dump"
BACKUP_FOLDER="/home/backup"
 
DUMP_ZIP_PARIS="dump_paris.sql.gz"
DUMP_ZIP_LONDON="dump_london.sql.gz"
DUMP_ZIP_NEW_YORK="dump_new_york.sql.gz"
DUMP_SQL_PARIS="dump_paris.sql"
DUMP_SQL_LONDON="dump_london.sql"
DUMP_SQL_NEW_YORK="dump_new_york.sql"
  
# Connection et Dump SQL pour Paris
ssh ${USER_PARIS}:${PASSWORD_PARIS}@${HOST_PARIS} ${DUMP_FOLDER}/${DUMP_SSH_FILE}
# Backup des fichiers SQL de PARIS vers le serveur distant
scp ${USER_PARIS}@${HOST_PARIS}:${DUMP_FOLDER}/${DUMP_ZIP_PARIS} ${BACKUP_FOLDER}
 
# Connection et Dump SQL pour Londres
ssh ${USER_PARIS}:${PASSWORD_PARIS}@${HOST_PARIS} ${DUMP_FOLDER}/${DUMP_SSH_FILE}
# Backup des fichiers SQL de Londres vers le serveur distant
scp ${USER_LONDON}@${HOST_LONDON}:${DUMP_FOLDER}/${DUMP_ZIP_LONDON} ${BACKUP_FOLDER}
 
# Connection et Dump SQL pour New York
ssh ${USER_NEW_YORK}:${PASSWORD_NEW_YORK}@${HOST_NEW_YORK} ${DUMP_FOLDER}/${DUMP_SSH_FILE}
# Backup des fichiers SQL de Londres vers le serveur distant
scp ${USER_NEW_YORK}@${HOST_NEW_YORK}:${DUMP_FOLDER}/${DUMP_ZIP_LONDON} ${BACKUP_FOLDER}
 
echo "Connection à  ${HOST_PARIS}: OK";
 
echo "Dump ${HOST_PARIS}: OK";
echo "Dump ${HOST_LONDON}: OK";
echo "Dump ${HOST_NEW_YORK}: OK";
  
# Gestion des droits
chmod 775 ${BACKUP_FOLDER}/${DUMP_ZIP_PARIS}
chmod 775 ${BACKUP_FOLDER}/${DUMP_ZIP_LONDON}
chmod 775 ${BACKUP_FOLDER}/${DUMP_ZIP_NEW_YORK}
