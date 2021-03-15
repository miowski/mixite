-- Profils : musicien ou groupe

CREATE TABLE Profil
(
    idProfil           bigint PRIMARY KEY,
    dateCreationProfil datetime
);

CREATE TABLE Groupe
(
    idGroupe           bigint PRIMARY KEY,
    dateCreationGroupe datetime,
    membresGroupe      varchar(512)
);

-- Infos de profil (partagées par musiciens ET groupes)

CREATE TABLE InfoProfil
(
    NomProfil         varchar(50) PRIMARY KEY,
    descriptionProfil varchar(140),
    photoProfil       bigint,
    idProfil          bigint,
    idGroupe          bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (IdProfil),
    FOREIGN KEY (idGroupe) REFERENCES Groupe (idGroupe),
    -- Vérifie qu'un seul type de profil est sollicité (musicien ou groupe)
    CONSTRAINT SingleProfileType check (
            (idProfil IS NULL OR idGroupe IS NULL)
            AND NOT (idProfil IS NULL AND idGroupe IS NULL)
        )
);

CREATE TABLE InfoProfil_Reseaux
(
    youtubeUrl        varchar(127),
    tiktokUserName    varchar(127),
    instagramUserName varchar(29),
    twitterUserName   varchar(14),
    spotifyUserName   varchar(127),
    deezerUrl         varchar(127),
    idProfil          bigint,
    idGroupe          bigint,
    FOREIGN KEY (idProfil) REFERENCES InfoProfil (IdProfil),
    FOREIGN KEY (idGroupe) REFERENCES InfoProfil (idGroupe),
    -- Vérifie qu'un seul type de profil est sollicité (musicien ou groupe)
    CONSTRAINT SingleProfileType check (
            (idProfil IS NULL OR idGroupe IS NULL)
            AND NOT (idProfil IS NULL AND idGroupe IS NULL)
        )
);

-- InfoProfil : instruments maitrisés, réservés aux profils de musiciens uniquement

CREATE TABLE InfoProfil_Instrument
(
    anneesInstrument tinyint,
    idInstrument     smallint,
    idProfil         bigint,
    FOREIGN KEY (idInstrument) REFERENCES Instrument (idInstrument),
    FOREIGN KEY (idProfil) REFERENCES InfoProfil (idProfil)
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
    idProfil          bigint,
    idGroupe          bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (IdProfil),
    FOREIGN KEY (idGroupe) REFERENCES Groupe (idGroupe)
    -- Inutile de ne sélectionner qu'un seul type de publicateur ici :
    -- Un utilisateur peut publier, mais aussi un utilisateur au travers d'un groupe,
    -- auquel cas l'id de l'utilisateur ET du groupe sont sollicités.
);

-- Médias & texte inclus dans un post

CREATE TABLE Post_Contenu
(
    idContenu bigint PRIMARY KEY,
    imagePost bigint,
    textePost varchar(279),
    videoPost bigint,
    audioPost bigint,
    idPost    bigint,
    FOREIGN KEY (idPost) REFERENCES Post (idPost)
);

-- Réalisations d'un groupe ou d'un musicien
-- -- releaseType : 0 = single, 1 = Album
-- -- (Un album est un ensemble de musiques sorties en même temps,
-- -- tandis qu'un Single est une musique seule)

CREATE TABLE Releases
(
    releaseId    bigint PRIMARY KEY,
    releaseDate  datetime,
    releaseName  varchar(127),
    releaseUrl   varchar(127),
    releaseCover bigint,
    releaseType  tinyint,
    idProfil          bigint,
    idGroupe          bigint,
    FOREIGN KEY (idProfil) REFERENCES Profil (IdProfil),
    FOREIGN KEY (idGroupe) REFERENCES Groupe (idGroupe),
    -- Vérifie qu'un seul type de profil est sollicité (musicien ou groupe)
    CONSTRAINT SingleProfileType check (
            (idProfil IS NULL OR idGroupe IS NULL)
            AND NOT (idProfil IS NULL AND idGroupe IS NULL)
        )
);