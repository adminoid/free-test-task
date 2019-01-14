#!/usr/bin/env bash
file='db.sqlite'
[ -e $file ] && rm $file && sqlite3 ./sqlite.db < ./init.sql
