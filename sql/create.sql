create table people(
    id int not null AUTO_INCREMENT,
    first_name varchar(40),
    last_name varchar(40),
    email varchar(40),
    primary key(id)
);

insert into people(first_name, last_name, email) value('Oleksandr', 'Dykyi', 'sharkozp@mail.ru');