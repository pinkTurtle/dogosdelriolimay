
host:
	sed 's/localhost/xifox.net\/dogosdelriolimay/' data/dogos.sql > data/production.sql

.PHONY: test
