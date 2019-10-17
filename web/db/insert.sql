INSERT INTO user_(username,user_password) VALUES ('shalomsims','password');
INSERT INTO user_(username,user_password) VALUES ('agentofshield92','strongestAvenger');
INSERT INTO user_(username,user_password) VALUES ('larry','livinglike');
INSERT INTO user_(username,user_password) VALUES ('PizzaGuy44','LactoseIntolerant');


INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'shalomsims'),'GOOD', 'Today was a really really good day. Im tired but happy. :)','Long Good Saturday');
INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'agentofshield92'),'MEH', 'Average Saturday. Got some things done.','Long Saturday');
INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'larry'),'GOOD', 'GREAT. SO GREAT.','She said yes!');
INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'PizzaGuy44'),'MEH', 'Didnt get pizza today.','No Pizza, no fun.');



SELECT u.username,u.user_password, de.user_id, de.entry_type, de.title, de.entry_text FROM daily_entry de JOIN user_ u ON u.username = 'shalomsims';