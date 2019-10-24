CREATE TABLE scriptures
( script_id SERIAL          NOT NULL PRIMARY KEY
, book      VARCHAR(16)     NOT NULL
, chapter   INTEGER         NOT NULL
, verse     INTEGER
, context   VARCHAR(500)    NOT NULL
);