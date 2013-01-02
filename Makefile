
db-dump:
	mysqldump -u root -palfilasesino --opt dogos > data/dump.sql

db-update:
	sed 's/localhost/xifox.net\/dogosdelriolimay/g' data/dump.sql > data/production.sql

db-bigdump:
	mkdir dogosdelriolimay/.dbt
	chmod 777 dogosdelriolimay/.dbt
	cp data/production.sql dogosdelriolimay/.dbt

db:
	clear
	make db-dump
	make db-update
	make db-bigdump
	git add data/ -v
	git add dogosdelriolimay/.dbt/ -v
	git commit -m "ready to update dB"

deploy:
	git-deploy

clean:
	git rm -rf dogosdelriolimay/.dbt
	git commit -m "clean .dbt files"

.PHONY: test



