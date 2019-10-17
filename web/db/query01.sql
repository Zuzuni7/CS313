SELECT p.id, p.name FROM participant p;
SELECT e.id, e.event_name FROM event_ e;


SELECT p.id, p.name, e.id, e.event_name, e.location_
FROM participant p  
JOIN event_ e 
ON e.id = p.id 
JOIN event_participant ep
ON ep.participant = ep.event_id;


SELECT p.id, p.name, e.id, e.event_name
FROM event_participant ep JOIN event_ e
ON e.id = ep.event_id JOIN participant p
ON p.id = ep.participant; 