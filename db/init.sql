CREATE TABLE users (
 id INTEGER PRIMARY KEY,
 login text NOT NULL UNIQUE
 password text NOT NULL
);
CREATE TABLE tasks (
 id INTEGER PRIMARY KEY,
 username TEXT NOT NULL,
 email text NOT NULL UNIQUE
 text TEXT NOT NULL,
);
