#!/bin/bash
file='db/db.sqlite'
sql='db/init.sql'
[[ -e ${file} ]] && rm ${file}
sqlite3 ./${file} < ./${sql}
