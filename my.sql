-- create
CREATE TABLE сlassmate (
  id INTEGER PRIMARY KEY, 
  name TEXT NOT NULL,
  age TEXT NOT NULL,
  address TEXT NOT NULL
  );
  
 -- insert
  INSERT INTO сlassmate VALUES (1, 'Марк', '21', 'Норильск');
  INSERT INTO сlassmate VALUES (2, 'Константин', '29', 'Москва');
  INSERT INTO сlassmate VALUES (3, 'Михайил', '22', 'Краснодар');
  INSERT INTO сlassmate VALUES (4, 'Василиса', '24', 'Ростов');
  INSERT INTO сlassmate VALUES (5, 'Роман', '32', 'Москва');
  
  
  -- fetch 
SELECT id, name FROM сlassmate 
WHERE (address = 'Москва' AND age between 18 and 30)
