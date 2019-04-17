# database
create database bookareana;
use bookareana;

# tables

# 1) user details

create table user
(
email varchar(50) primary key,
password varchar(50) not null,
name varchar(50) not null,
address varchar(100) not null,
phone bigint not null
);

	#user values
insert into user values
('sshankarsingh.16.cse@anits.edu.in','vizagboy','Shiv Shankar Singh','58-03-01,ramnaidu colony,marripalem,vzg',8464029877),
('manasas123@ymail.com','manasaanits','Manasa Singh','mvp sector 200 viz',9966539496);






# 2) book details

create table book
(
	bname varchar(100) not null,
	author varchar(50) not null,
	edition int(10) not null,
	bcondition varchar(10) not null,
	publication varchar(50) not null,
	price int(10) not null,
	subject varchar(50) not null,
	genre varchar(50) not null
);
	#books values

insert into book values
('Introduction To Algorithms','Thomas H.Cormen',3,'new','Eastern Economy Edition',525,'Algorithms','Computer Science'),
('Data Structures A Pseudocode Approach','Richard F.Gilberg',2,'new','Cengage Learning',410,'Data Structures','Computer Science'),
('Data Structures Using C++','Yedidyah Langsam',2,'new','Eastern Economy Edition',700,'Data Structures','Computer Science'),
('Computer System Architecture','M.Morris Mano',3,'new','Pearson Education',350,'Computer Architecture','Computer Science'),
('Data Communications And Networking','Behrouz A. forouzan',2,'new','Tata McGraw-Hill',800,'Data Communications','Computer Science'),
('Operations Research','R.Panneerselvam',2,'new','Eastern Economy Edition',730,'Algorithms','Computer Science'),
('The Complete Reference C++','Herbert Schildt',4,'new','Tata McGraw-Hill',900,'Programing Language','Computer Science'),
('Modern Operating System','Andrew S.Tanenbaum',3,'new','Pearson Education',510,'Operating System','Computer Science'),
('A Textbook On Automata Theory','P.K.Srimani',2,'new','Foundation',370,'Flat','Computer Science'),
('The Introduction To The Design & Analysis Of Algorithms','Anany Levitin',2,'new','Pearson Education',280,'Algorithms','Computer Science'),
('Computer Graphics C Version','Donald Hearn',2,'new','Pearson Education',1200,'Computer Graphics','Computer Science'),
('Quantitative Aptitude','Dr.R.S.Aggarwal',4,'new','S.Chand',240,'Quantitative Aptitude','Quantitative Aptitude'),
('Computer Architecture A Quantitative Approach','John L.Hennessy',5,'new','Morgan Kaufmann',1400,'Computer Architecture','Computer Science'),
('An Integrated Approach To Software Engineering','Pankaj Jalote',3,'new','Narosa',600,'Software Engineering','Computer Science'),
('The Kite Runner ,A Thousand Splendid Svns','Khaled Hosseini',1,'new','Bloomsbury',499,'Social','Novel'),
('The Hunger Games Mockingjay','Suzanne Collins',1,'new','Scholastic Press',395,'Mystery','Novel'),
('Me Before You','Jojo Moyes',1,'new','Penguin',399,'Romantic','Novel'),
('Virat Kohli','ayaz Memon',2,'new','Jaico Books',125,'Sports','Novel'),
('The Girl Who Played With Fire','Stieg Larsson',1,'new','Quercus Books',300,'Mystery','Novel'),
('Twenties Girl','Sophie Kinsella',1,'new','R Books',299,'Drama','Novel');









# 3) sale details

create table sale
(
	email varchar(50) not null,
	bname varchar(100) not null,
	sale_date date ON UPDATE curdate(),
	pay_mode varchar(20) not null,
	card_no int(20) 
	

);
	#sale values
	insert into sale (email,bname,pay_mode,card_no)values
		('sshankarsingh.16.cse@anits.edu.in','Twenties Girl','cod',null);

# 4) cart details
create table cart
(
	email varchar(50) not null,
	cart_bname varchar(100) not null
);
	#cart values
insert into cart values
('sshankarsingh.16.cse@anits.edu.in','Introduction To Algorithms');


# 5) sell details
create table sell
(
	email varchar(50) not null,
	bname varchar(50) not null
);

	#sell values
insert into sell values
	('sshankarsingh.16.cse@anits.edu.in','Compiler Design');



























