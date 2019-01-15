CREATE TABLE IF NOT EXISTS users (
 id INTEGER PRIMARY KEY,
 login text NOT NULL UNIQUE,
 password text NOT NULL
);

CREATE TABLE IF NOT EXISTS tasks (
 id INTEGER PRIMARY KEY,
 username TEXT NOT NULL,
 email text NOT NULL UNIQUE,
 text TEXT NOT NULL,
 user_id
);

INSERT INTO users (
 login,
 password)
VALUES (
 'admin',
 123);
