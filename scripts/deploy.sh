#! /bin/sh
SCRIPTS_PATH=`pwd`"/"`dirname $0`
PROJECT_PATH=$SCRIPTS_PATH"/.."
OCTOBER_PATH=$PROJECT_PATH"/october"

echo ' - starting deploy'
cd $PROJECT_PATH
git push aws
echo ' - finished deploy'