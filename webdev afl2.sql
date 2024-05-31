drop database webdevafl2;
create database webdevafl2;
use webdevafl2;

CREATE TABLE ContactMe (
    Name_ VARCHAR(20),
    Email_ VARCHAR(100),
    Message_ varchar(9999)
);

INSERT INTO ContactMe (Name_, Email_, Message_) 
VALUES ('Rangga', 'rr@gmail.com', 'Hello');