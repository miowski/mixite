-- Base de données pour Mixite
-- Révision 2

-- Un musicien & ses informations de profil

CREATE TABLE User
(
    userID                BIGINT PRIMARY KEY,
    userCreationDate      DATETIME,
    userName              VARCHAR(15),
    userDisplayName       VARCHAR(20),
    userDescription       VARCHAR(255),
    userProfilePictureUrl VARCHAR(255),
    userProfileBannerUrl  VARCHAR(255),
    userTiktokName        VARCHAR(24),
    userTwitterName       VARCHAR(15),
    userInstagramName     VARCHAR(20),
    userYoutubeName       VARCHAR(50),
    userSpotifyName       VARCHAR(25),
    userDeezerName        VARCHAR(50)
);

-- Les identifiants d'un musicien
-- Table secrète

CREATE TABLE UserCredentials
(
    email    VARCHAR(64) PRIMARY KEY,
    password VARCHAR(32),
    userID   BIGINT,
    FOREIGN KEY (userID) REFERENCES User (userID)
);

-- Un groupe de musique

CREATE TABLE MusicGroup
(
    mGroupID               BIGINT,
    mGroupCreationDate     DATETIME,
    mGroupAdmin            BIGINT,
    mGroupMembers           VARCHAR(64),
    mGroupName              VARCHAR(15),
    mGroupDisplayName       VARCHAR(20),
    mGroupeDescription      VARCHAR(255),
    mGroupProfilePictureUrl VARCHAR(255),
    mGroupProfileBannerUrl  VARCHAR(255),
    mGroupTiktokName        VARCHAR(25),
    mGroupTwitterName       VARCHAR(15),
    mGroupInstagramName     VARCHAR(20),
    mGroupYoutubeName       VARCHAR(50),
    mGroupSpotifyName       VARCHAR(25),
    mGroupDeezerName        VARCHAR(50),
    FOREIGN KEY (mGroupAdmin) REFERENCES User (userID)
);

-- Un instrument de musique
-- instrumentType contient un numéro identifiant le type d'instrument (Bois, vent, cordes mais aussi chant, mixage, etc.)

CREATE TABLE Instrument
(
    instrumentID   SMALLINT,
    instrumentName VARCHAR(60),
    instrumentType SMALLINT
);

CREATE TABLE PlaysInstrument
(
    instrumentID   SMALLINT,
    userID         BIGINT,
    FOREIGN KEY (instrumentID) REFERENCES Instrument (instrumentID),
    FOREIGN KEY (userID) REFERENCES User (userID),
    practicesSince SMALLINT
);

-- Une publication
-- Peut être postée par un groupe ou un utilisateur.

CREATE TABLE Posts
(
    postID           BIGINT,
    postCreationDate DATETIME,
    postTitle        VARCHAR(64),
    postContent      VARCHAR(256),
    postMediaUrl     VARCHAR(256)
);