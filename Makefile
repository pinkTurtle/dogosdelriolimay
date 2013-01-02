
db:
	sed 's/localhost/xifox.net\/dogosdelriolimay/' data/dogos.sql > data/production.sql

deploy:
	clear
	make host
	mkdir dogosdelriolimay/.upgrade
	cp tools/bigdump.php dogosdelriolimay/.upgrade/
	cp data/production.sql dogosdelriolimay/.upgrade/
	git add dogosdelriolimay/.upgrade
	git commit -m "ready to deploy"
	git-deploy

clean:
	git rm -rf dogosdelriolimay/.upgrade
	git commit -m "clean .upgrade files"

.PHONY: test
