#!/bin/bash
file='db.sqlite'
sql='init.sql'
[[ -e ${file} ]] && rm ${file}
sqlite3 ./${file} < ./${sql}
