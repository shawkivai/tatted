//01-03-2020
INSERT INTO states (state_name,state_code)
SELECT DISTINCT state_name,state_code
FROM au_postcode;

INSERT INTO postcodes (postcode_no,state_id)
SELECT DISTINCT au_postcode.postcode,states.id
FROM au_postcode
INNER JOIN states
ON au_postcode.state_name = states.state_name;

INSERT INTO suburbs (suburb_name,state_id,postcode_id)
SELECT  DISTINCT au_postcode.place_name,states.id,postcodes.id
FROM au_postcode
INNER JOIN states
ON au_postcode.state_name = states.state_name
INNER JOIN postcodes
ON au_postcode.postcode = postcodes.postcode_no;

SELECT postcode_no, COUNT(postcode_no) FROM postcodes
GROUP BY postcode_no
HAVING COUNT(postcode_no) > 1;

DELETE t1 FROM postcodes t1
INNER JOIN postcodes t2
WHERE t1.id < t2.id AND
t1.postcode_no = t2.postcode_no;
