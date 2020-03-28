CREATE TABLE think_user(

user_id int(11) not null primary key auto_increment,

user_name varchar(255) NOT NULL, 

user_sex int(11) DEFAULT NULL, 

user_tel varchar(255) DEFAULT NULL,  

user_email varchar(255) DEFAULT NULL,  

user_address varchar(255) DEFAULT NULL,  

user_birth varchar(255) DEFAULT NULL,  

user_passwd varchar(255) DEFAULT NULL,  

user_signature varchar(255) DEFAULT NULL, 

user_hobby varchar(255) DEFAULT NULL)

ENGINE=InnoDB DEFAULT CHARSET=utf8;
