--Drops
PRAGMA foreign_keys = OFF;
DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Events;

PRAGMA foreign_keys = ON;
.bail ON
.mode columns
.headers on
.nullvalue NULL

--Creates
CREATE TABLE Users(
	iduser INTEGER PRIMARY KEY AUTOINCREMENT,
	userName TEXT NOT NULL,
	email TEXT NOT NULL,
	password TEXT NOT NULL,
	lastAccess DATE DEFAULT (datetime('now')),
	dob DATE NOT NULL,
	gender TEXT NOT NULL,
	UNIQUE(email, userName)
);

CREATE TABLE Events(
	idEvent INTEGER PRIMARY KEY  REFERENCES Users(idUser),
	eventDate DATE,
	image TEXT,
	title TEXT,
	description TEXT
);



