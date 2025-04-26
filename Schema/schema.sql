create table tbsettings(
id int primary key auto_increment,
siteTitle text,
siteAbout text,
shutdown tinyint(1)
)

create table tbhoteldetails(
id int primary key auto_increment,
hotelId int,
address text,
phone TEXT,
email varchar(250),
socials TEXT,
gmap text,
iframe text
)

create table teamdetails(
id int primary key auto_increment,
name text,
picture text,
active tinyint(1) default 1
)

create table tbadmin (
id int primary key auto_increment,
admin_name text,
admin_password text,
active tinyint(1) default 1
)