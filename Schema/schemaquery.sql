-- Active: 1745378165761@@127.0.0.1@3306@db_shreehotel

-- For tbadmin
insert into tbadmin (admin_name, admin_password, active) values ('shree', 'shree', 1);

-- For tbsettings
insert into tbsettings ( `siteTitle`,`siteAbout`,shutdown) values ('shree','shree',1);

-- For tbhoteldetails
insert into tbhoteldetails (`hotelId`, address, phone, email, socials, gmap, iframe) values ('1', 'Pokhara - 08', '', '', '', '', '');