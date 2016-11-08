`docker-compose up -d`

`docker-compose run php php /sites/musiclists/october/artisan october:up`

`docker-compose run php php /sites/musiclists/october/artisan october:mirror ../www`

To reset everything;

```
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
docker rmi $(docker images -q)
```
