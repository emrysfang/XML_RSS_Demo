create table blog (
	id int primary key auto_increment,
	title varchar(128),
	author varchar (36) unique key,
	description varchar(200),
	content text,
	add_time datetime
)charset=utf8;

insert into blog (title, author, description, content, add_time) values('XML and RSS', 'Tom', 'Telling to us the story of XML.', 'This is a very good text ever!', now()),
				('JavaScript', 'Jessy','I dont know how to say','Haha, very lovely.', now()),
				('PHP', 'Messy','He has the real tech','roger that, very lovely also.', now());