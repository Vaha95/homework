2. Сделать в новой папке проект с docker контейнером mysql, в режиме консоли mysql:
	- Создайте БД;
	- Создайте 5 таблиц, (brand, factory, model, modification, detail с полем количества данной детали) - factory и model связан с brand, modification связан с model, detail связан с modification. Поля на свое усмотрение.
	- Заполните данными. не менее 3 брендов, 5 моделей 10 модификаци 20 деталей
	
	- Напишите запросы которые покажут сколько всех деталей у каждого бренда.
	- Напишите запросы которые покажут сколько разновидностей деталей у каждого бренда.	
	
Посмотрите в Интернете что такое mysqldump, приложите к проекту результат выолнения.

Создание нужных таблиц 

CREATE TABLE brand (id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, title VARCHAR(50), PRIMARY KEY(id), INDEX(title));

CREATE TABLE factory (id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, title VARCHAR(50), brand INT(5) NOT NULL REFERENCES brand(id), PRIMARY KEY(id), INDEX(title));

CREATE TABLE model (id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, title VARCHAR(50), brand INT(5) NOT NULL REFERENCES brand(id), PRIMARY KEY(id), INDEX(title));

CREATE TABLE modification (id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, title VARCHAR(50), model INT(5) NOT NULL REFERENCES model(id), PRIMARY KEY(id), INDEX(title));

CREATE TABLE detail (id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT, title VARCHAR(50), modification INT(5) NOT NULL REFERENCES modification(id), PRIMARY KEY(id), INDEX(title));

SET @brand = (SELECT id FROM brand WHERE title='Brand 1'); INSERT INTO factory (brand, title) VALUES (@brand, 'Factory 1,1'),(@brand, 'Factory 1,2'),(@brand, 'Factory 1,3');

SET @brand = (SELECT id FROM brand WHERE title='Brand 1'); INSERT INTO model (brand, title) VALUES (@brand, 'Model 1,1'),(@brand, 'Model 1,2');

SET @brand = (SELECT id FROM brand WHERE title='Brand 2'); INSERT INTO model (brand, title) VALUES (@brand, 'Model 2,1'),(@brand, 'Model 2,2');

SET @brand = (SELECT id FROM brand WHERE title='Brand 3'); INSERT INTO model (brand, title) VALUES (@brand, 'Model 3,1'),(@brand, 'Model 3,2');

SET @model = (SELECT id FROM model WHERE title='Model 1,1'); INSERT INTO modification (model, title) VALUES (@model, 'Modif 1,1,1'),(@model, 'Modif 1,1,2');

SET @model = (SELECT id FROM model WHERE title='Model 1,2'); INSERT INTO modification (model, title) VALUES (@model, 'Modif 1,2,1'),(@model, 'Modif 1,2,2');

SET @model = (SELECT id FROM model WHERE title='Model 2,1'); INSERT INTO modification (model, title) VALUES (@model, 'Modif 2,1,1'),(@model, 'Modif 2,1,2');

SET @model = (SELECT id FROM model WHERE title='Model 2,2'); INSERT INTO modification (model, title) VALUES (@model, 'Modif 2,2,1'),(@model, 'Modif 2,2,2');

SET @model = (SELECT id FROM model WHERE title='Model 3,1'); INSERT INTO modification (model, title) VALUES (@model, 'Modif 3,1,1'),(@model, 'Modif 3,1,2');

SET @model = (SELECT id FROM model WHERE title='Model 3,2'); INSERT INTO modification (model, title) VALUES (@model, 'Modif 3,2,1'),(@model, 'Modif 3,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,1,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,1,1,1'),(@modif, 'Detail 1,1,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,1,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,1,2,1'),(@modif, 'Detail 1,1,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,2,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,2,1,1'),(@modif, 'Detail 1,2,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,2,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,2,2,1'),(@modif, 'Detail 1,2,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,1,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,1,1,1'),(@modif, 'Detail 2,1,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,1,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,1,2,1'),(@modif, 'Detail 2,1,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,2,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,2,1,1'),(@modif, 'Detail 2,2,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,2,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,2,2,1'),(@modif, 'Detail 2,2,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 3,1,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 3,1,1,1'),(@modif, 'Detail 3,1,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,1,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,1,1,1'),(@modif, 'Detail 1,1,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,1,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,1,2,1'),(@modif, 'Detail 1,1,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,2,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,2,1,1'),(@modif, 'Detail 1,2,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 1,2,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 1,2,2,1'),(@modif, 'Detail 1,2,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,1,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,1,1,1'),(@modif, 'Detail 2,1,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,1,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,1,2,1'),(@modif, 'Detail 2,1,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,2,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,2,1,1'),(@modif, 'Detail 2,2,1,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 2,2,2'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 2,2,2,1'),(@modif, 'Detail 2,2,2,2');

SET @modif = (SELECT id FROM modification WHERE title='Modif 3,1,1'); INSERT INTO detail (modification, title) VALUES (@modif, 'Detail 3,1,1,1'),(@modif, 'Detail 3,1,1,2');

1. Запросы деталей по брендам 

SELECT b.title as brand, d.title as detail FROM brand as b JOIN model as m ON b.id=m.brand JOIN modification as f ON m.id=f.model JOIN detail as d ON f.id=d.modification WHERE b.title='Brand 1';

SELECT b.title as brand, d.title as detail FROM brand as b JOIN model as m ON b.id=m.brand JOIN modification as f ON m.id=f.model JOIN detail as d ON f.id=d.modification WHERE b.title='Brand 2';

SELECT b.title as brand, d.title as detail FROM brand as b JOIN model as m ON b.id=m.brand JOIN modification as f ON m.id=f.model JOIN detail as d ON f.id=d.modification WHERE b.title='Brand 3';

2. Запросы модификаций по брендам

SELECT b.title as brand, f.title as modification FROM brand as b JOIN model as m ON b.id=m.brand JOIN modification as f ON m.id=f.model WHERE b.title='Brand 1';

SELECT b.title as brand, f.title as modification FROM brand as b JOIN model as m ON b.id=m.brand JOIN modification as f ON m.id=f.model WHERE b.title='Brand 2';

SELECT b.title as brand, f.title as modification FROM brand as b JOIN model as m ON b.id=m.brand JOIN modification as f ON m.id=f.model WHERE b.title='Brand 3';