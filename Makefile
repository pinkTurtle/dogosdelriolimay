
dump:
	clear
	mysqldump -u root -palfilasesino --opt dogos > data/dump.sql
	sed 's/localhost\/dogosdelriolimay\/website/xifox.net\/dogosdelriolimay/g' data/dump.sql > data/production.sql

push:
	tools/ftp-push

deploy:
	git-deploy

clean:
	bash tools/ftp-clean
.PHONY: test

