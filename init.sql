CREATE TABLE Profile
(
    ID          BIGINT AUTO_INCREMENT,
    Name        VARCHAR(20),
    Picture     VARCHAR(256),
    Banner      VARCHAR(256),
    Description VARCHAR(512),
    JoinDate    DATETIME,
    Insta       VARCHAR(20),
    Spotify     VARCHAR(50),
    Tiktok      VARCHAR(24),
    Email       VARCHAR(50),
    Password    VARCHAR(50),
    Youtube     VARCHAR(50),
    PRIMARY KEY (ID),
    UNIQUE (Name),
    UNIQUE (Email)
);

CREATE TABLE Post
(
    ID              INT,
    Publisher       BIGINT,
    PublicationDate DATETIME    NOT NULL,
    Title           VARCHAR(64) NOT NULL,
    Description     VARCHAR(256),
    Media           INT,
    PRIMARY KEY (ID),
    UNIQUE (Media)
);

CREATE TABLE Band
(
    ID           INT,
    Name         VARCHAR(15) NOT NULL,
    CreationDate DATETIME    NOT NULL,
    Genre        VARCHAR(50),
    Description  VARCHAR(256),
    Profile      INT,
    Insta        VARCHAR(20),
    Spotify      VARCHAR(15),
    Youtube      VARCHAR(50),
    Tiktok       VARCHAR(25),
    PRIMARY KEY (ID),
    UNIQUE (Name)
);

CREATE TABLE Instrument
(
    ID       INT,
    Name     VARCHAR(50) NOT NULL,
    Category INT         NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE inBand
(
    profileID BIGINT,
    bandID    INT,
    Since     DATETIME NOT NULL,
    isAdmin   LOGICAL,
    PRIMARY KEY (profileID, bandID),
    FOREIGN KEY (profileID) REFERENCES Profile (ID),
    FOREIGN KEY (bandID) REFERENCES Band (ID)
);

CREATE TABLE Publishes
(
    profileID BIGINT,
    postID    INT,
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
    ID   BIGINT,
    ID_1 INT,
    PRIMARY KEY (ID, ID_1),
    FOREIGN KEY (ID) REFERENCES Profile (ID),
    FOREIGN KEY (ID_1) REFERENCES Post (ID)
);