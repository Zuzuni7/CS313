CREATE TABLE Account (
    account_id          SERIAL          PRIMARY KEY
,   username            VARCHAR(20)     NOT NULL
,   hashed_password     VARCHAR(50)     NOT NULL
);


