CREATE TABLE Profile
(
    ID          BIGINT AUTO_INCREMENT,
    name        VARCHAR(20),
    picture     VARCHAR(256),
    banner      VARCHAR(256),
    description VARCHAR(512),
    joinDate    DATETIME,
    insta       VARCHAR(20),
    spotify     VARCHAR(50),
    tiktok      VARCHAR(24),
    youtube     VARCHAR(50),
    email       VARCHAR(50),
    password    VARCHAR(50),
    PRIMARY KEY (ID),
    UNIQUE (name),
    UNIQUE (email)
);

CREATE TABLE Befriends
(
    profile1 BIGINT NOT NULL,
    profile2 BIGINT NOT NULL,
    since DATETIME NOT NULL,
    PRIMARY KEY (profile1, profile2),
    FOREIGN KEY (profile1) REFERENCES Profile(ID),
    FOREIGN KEY (profile1) REFERENCES Profile(ID)
);

CREATE TABLE Post
(
    ID              BIGINT,
    publisher       BIGINT,
    publicationDate DATETIME    NOT NULL,
    title           VARCHAR(64) NOT NULL,
    description     VARCHAR(256),
    media           INT,
    PRIMARY KEY (ID),
    UNIQUE (media)
);

CREATE TABLE Band
(
    ID           INT,
    name         VARCHAR(15) NOT NULL,
    creationDate DATETIME    NOT NULL,
    genre        VARCHAR(50),
    description  VARCHAR(256),
    profile      INT,
    insta        VARCHAR(20),
    spotify      VARCHAR(15),
    youtube      VARCHAR(50),
    tiktok       VARCHAR(25),
    PRIMARY KEY (ID),
    UNIQUE (name)
);

CREATE TABLE Instrument
(
    ID       INT,
    name     VARCHAR(50) NOT NULL,
    category INT         NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE inBand
(
    profileID BIGINT,
    bandID    INT,
    since     DATETIME NOT NULL,
    isAdmin   BOOLEAN,
    PRIMARY KEY (profileID, bandID),
    FOREIGN KEY (profileID) REFERENCES Profile (ID),
    FOREIGN KEY (bandID) REFERENCES Band (ID)
);

CREATE TABLE Publishes
(
    profileID BIGINT,
    postID    BIGINT,
    PRIMARY KEY (profileID, postID),
    FOREIGN KEY (profileID) REFERENCES Profile (ID),
    FOREIGN KEY (postID) REFERENCES Post (ID)
);

CREATE TABLE PlaysInstrument
(
    profileID    BIGINT,
    instrumentID INT,
    Since        DATETIME NOT NULL,
    PRIMARY KEY (profileID, instrumentID),
    FOREIGN KEY (profileID) REFERENCES Profile (ID),
    FOREIGN KEY (instrumentID) REFERENCES Instrument (ID)
);

CREATE TABLE Likes
(
    profileID   BIGINT,
    postID BIGINT,
    PRIMARY KEY (profileID, postID),
    FOREIGN KEY (profileID) REFERENCES Profile (ID),
    FOREIGN KEY (postID) REFERENCES Post (ID)
);