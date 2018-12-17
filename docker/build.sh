cd /root/git/workspace/Hellodocker/docker/src
docker container stop test1
docker container rm test1
docker build -t test .
docker run -d --name test1 -p 4000:80 test
