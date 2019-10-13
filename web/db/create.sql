-- CREATE TABLE quote
-- ( quote_id SERIAL NOT NULL PRIMARY KEY
-- , entry_id SERIAL REFERENCES daily_entry(daily_entry_id)
-- , daily_entry VARCHAR(1000)
-- , created_date DATE NOT NULL
-- );

-- CREATE TABLE good
-- ( good_id SERIAL NOT NULL PRIMARY KEY
-- , entry_id SERIAL REFERENCES daily_entry(daily_entry_id)
-- , daily_entry VARCHAR(1000)
-- , created_date DATE NOT NULL
-- );

-- CREATE TABLE meh
-- ( meh_id SERIAL NOT NULL PRIMARY KEY
-- , daily_entry_id SERIAL REFERENCES daily_entry(daily_entry_id)
-- , daily_entry VARCHAR(1000)
-- , created_date DATE NOT NULL
-- );
--CREATE SEQUENCE  quote_s1 START WITH 1;
--CREATE SEQUENCE meh_s1 START WITH 1;
--CREATE SEQUENCE good_s1 START WITH 1;
--CREATE SEQUENCE daily_entry_s1 START WITH 1;

\i delete.sql

CREATE TABLE user_
( user_id SERIAL NOT NULL PRIMARY KEY
--, daily_entry_id SERIAL REFERENCES daily_entry(daily_entry_id)
, username VARCHAR(20) NOT NULL UNIQUE
, user_password VARCHAR(20) NOT NULL
);

CREATE TABLE daily_entry
( daily_entry_id SERIAL NOT NULL PRIMARY KEY
, user_id SERIAL REFERENCES user_(user_id)
, entry_type VARCHAR(10) NOT NULL
, entry_text VARCHAR(1000) NOT NULL
, title VARCHAR(100) NOT NULL
, created_date DATE NOT NULL
);

\i insert.sql

