-- Profils : musicien ou groupe

CREATE TABLE Profil
(
    idProfil           bigint PRIMARY KEY,
    dateCreationProfil datetime
);

-- -- typeProfil : 0 = musicien, 1=groupe

CREATE TABLE Profil_Type
(
    typeProfil tinyint PRIMARY KEY,
    idProfil   varchar,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);

-- Infos de profil (partagées par musiciens ET groupes)

CREATE TABLE InfoProfil
(
    NomProfil         varchar(50) PRIMARY KEY,
    descriptionProfil varchar(140),
    photoProfil       bigint,
    idProfil          bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (IdProfil)
);

CREATE TABLE InfoProfil_Reseaux
(
    youtubeUrl        varchar(127),
    tiktokUserName    varchar(127),
    instagramUserName varchar(29),
    twitterUserName   varchar(14),
    spotifyUserName   varchar(127),
    deezerUrl         varchar(127)
);

-- InfoProfil : instruments maitrisés, réservés aux profils de musiciens uniquement

CREATE TABLE InfoProfil_Instrument
(
    anneesInstrument tinyint,
    idInstrument     smallint,
    idProfil         bigint,
    FOREIGN KEY (idInstrument) REFERENCES Instrument (idInstrument),
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);

CREATE TABLE Instrument
(
    idInstrument    smallint PRIMARY KEY,
    nomInstrument   varchar(127),
    iconeInstrument smallint
);

-- Publications (pouvant être postées par musiciens ET groupes)

CREATE TABLE Post
(
    idPost   bigint PRIMARY KEY,
    datePost datetime,
    typePost tinyint,
    idProfil bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);

-- Médias & texte inclus dans un post

CREATE TABLE Post_Contenu
(
    idContenu bigint PRIMARY KEY,
    imagePost bigint,
    textePost varchar(279),
    videoPost varchar(99),
    audioPost bigint,
    idPost    bigint,
    FOREIGN KEY (idPost) REFERENCES Post (idPost)
);

-- Réalisations d'un groupe ou d'un musicien

CREATE TABLE Album
(
    albumId    bigint PRIMARY KEY,
    albumName  varchar(127),
    albumImage bigint,
    albumLLink varchar(255),
    idProfil bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);

CREATE TABLE Single
(
    singleId    bigint PRIMARY KEY,
    singleName  varchar(127),
    singleImage bigint,
    SingleLink  varchar(255),
    idProfil bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);

CREATE TABLE ExtraitAudio
(
    extraitId   bigint PRIMARY KEY,
    extraitNom  varchar(127),
    extraitDate datetime,
    idProfil    bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);