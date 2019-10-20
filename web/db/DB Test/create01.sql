
------------------------------------
--  DROP TABLES
------------------------------------
\i db/delete01.sql;

------------------------------------
--  CREATE TABLES
------------------------------------
CREATE TABLE event_
( id SERIAL NOT NULL PRIMARY KEY
, location_ VARCHAR(55) NOT NULL
, event_name VARCHAR(55) NOT NULL
, date DATE 
);

CREATE TABLE participant
( id SERIAL NOT NULL PRIMARY KEY
, name VARCHAR(55) NOT NULL
);


CREATE TABLE event_participant
( id SERIAL PRIMARY KEY NOT NULL
, event_id  INT NOT NULL REFERENCES event_(id)
, participant INT NOT NULL REFERENCES participant(id)
);


------------------------------------
--  INSERTS
------------------------------------
\i db/insert01.sql;

------------------------------------
--  Query
------------------------------------

\i db/query01.sql;