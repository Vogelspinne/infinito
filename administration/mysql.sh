(cd $(dirname $(readlink -f ${0}))/../docker-symfony/ && docker-compose exec db mysql -proot -u root)
