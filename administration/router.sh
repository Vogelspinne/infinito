(cd $(dirname $(readlink -f ${0}))/../docker-symfony/ && docker-compose exec php php bin/console debug:router);
