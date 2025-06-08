postgres:
	docker run --name postgres17 -p 5432:5432 -e POSTGRES_USER=root -e POSTGRES_PASSWORD=secret -d postgres: 17-alpine

pullimage:
	docker pull postgres:17-alpine

createdb:
	docker exec -it postgres17 createdb --username=root --owner=root JoãoeGabrielDB



.PHONY: postgres pullimage createdb
