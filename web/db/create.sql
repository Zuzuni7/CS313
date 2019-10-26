

\i db/delete.sql

CREATE TABLE user_
( user_id SERIAL NOT NULL PRIMARY KEY
, username VARCHAR(20) NOT NULL UNIQUE
, user_password VARCHAR(20) NOT NULL
);

CREATE TABLE daily_entry
( daily_entry_id SERIAL NOT NULL PRIMARY KEY
, user_id SERIAL REFERENCES user_(user_id)
, entry_type VARCHAR(10) NOT NULL
, entry_text VARCHAR(1000) NOT NULL
, title VARCHAR(100) NOT NULL
, created_date TIMESTAMP DEFAULT now()
);

CREATE TABLE quote 
( quote_id SERIAL NOT NULL PRIMARY KEY
, quote_text VARCHAR(250)
);

\i db/insert.sql