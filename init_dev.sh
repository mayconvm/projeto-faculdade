#!/bin/bash 

docker start a84b319d0d17

folderProject=`pwd`

# backend
cd "$folderProject"/projeto/backend/fitness/web
php -S localhost:3000 &

#frontend
cd "$folderProject"/projeto/frontend/fitness/admin
npm start
