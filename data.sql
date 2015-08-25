SET FOREIGN_KEY_CHECKS=0;



DROP TABLE IF EXISTS article_comments CASCADE
;
DROP TABLE IF EXISTS articles CASCADE
;
DROP TABLE IF EXISTS category CASCADE
;
DROP TABLE IF EXISTS comments CASCADE
;
DROP TABLE IF EXISTS galleries CASCADE
;
DROP TABLE IF EXISTS image CASCADE
;
DROP TABLE IF EXISTS state CASCADE
;
DROP TABLE IF EXISTS static_pages CASCADE
;
DROP TABLE IF EXISTS sub_category CASCADE
;
DROP TABLE IF EXISTS users CASCADE
;

CREATE TABLE article_comments
(
	article_id INTEGER NOT NULL,
	comment_id INTEGER NOT NULL,
	PRIMARY KEY (article_id, comment_id)

) 
;


CREATE TABLE articles
(
	id INTEGER NOT NULL AUTO_INCREMENT,
	user_id INTEGER,
	date_written TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	title VARCHAR(250),
	content TEXT,
	tag VARCHAR(250),
	sub_category_id INTEGER,
	state_id INTEGER,
	rating INTEGER,
	image_id INTEGER,
	PRIMARY KEY (id)

) 
;


CREATE TABLE category
(
	id INTEGER NOT NULL AUTO_INCREMENT,
	category_name VARCHAR(50),
	PRIMARY KEY (id)

) 
;


CREATE TABLE comments
(
	id INTEGER NOT NULL AUTO_INCREMENT,
	article_id INTEGER NOT NULL,
	user_id INTEGER,
	comments TEXT,
	date_commented TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	is_banned BOOL DEFAULT FALSE,
	reply_of INTEGER,
	PRIMARY KEY (id, article_id)

) 
;


CREATE TABLE galleries
(
	id INTEGER NOT NULL,
	img_path VARCHAR(50),
	img_name VARCHAR(50),
	img_type VARCHAR(50),
	description TEXT,
	PRIMARY KEY (id)

) 
;


CREATE TABLE image
(
	id INTEGER NOT NULL,
	file_path VARCHAR(250),
	article_id INTEGER,
	PRIMARY KEY (id)

) 
;


CREATE TABLE state
(
	id BIGINT NOT NULL AUTO_INCREMENT,
	state_name VARCHAR(50),
	PRIMARY KEY (id)

) 
;


CREATE TABLE static_pages
(
	id INTEGER NOT NULL,
	name VARCHAR(50),
	menu_name VARCHAR(50),
	is_menu BOOL,
	is_active BOOL,
	content TEXT,
	link VARCHAR(50),
	PRIMARY KEY (id)

) 
;


CREATE TABLE sub_category
(
	category_id INTEGER NOT NULL,
	sub_category_id INTEGER NOT NULL,
	sub_category_name VARCHAR(50),
	PRIMARY KEY (category_id, sub_category_id)

) 
;


CREATE TABLE users
(
	id INTEGER NOT NULL AUTO_INCREMENT,
	user_id VARCHAR(50),
	email VARCHAR(50),
	phone VARCHAR(50),
	password VARCHAR(50),
	date_registered DATE,
	last_login DATE,
	type VARCHAR(50),
	fist_name VARCHAR(50),
	last_name VARCHAR(50),
	institution VARCHAR(50),
	address TEXT,
	city VARCHAR(50),
	PRIMARY KEY (id)

) 
;



SET FOREIGN_KEY_CHECKS=1;
