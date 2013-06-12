
dump:
	clear
	mysqldump -u root -palfilasesino --opt dogos > data/dump.sql
	sed 's/localhost\/dogosdelriolimay\/website/xifox.net\/dogosdelriolimay/g' data/dump.sql > data/production.sql
	`cat data/xifox_dogoslimay.sql | sed 's/www.dogosdelriolimay.com.ar/localhost\/dogos/g' > data/local.sql`

ftp-push:
	tools/ftp-push

deploy:
	git-deploy

ftp-clean:
	bash tools/ftp-clean
.PHONY: test

