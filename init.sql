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
    adminGroupe        bigint,
    FOREIGN KEY (adminGroupe) REFERENCES Profil (idProfil)
);

CREATE TABLE Groupe_Membres
(
    idGroupe          bigint PRIMARY KEY,
    idProfil          bigint,
    dateRejointGroupe datetime,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil),
    FOREIGN KEY (idGroupe) REFERENCES Groupe (idGroupe)
);

-- Infos de profil (partagées par musiciens ET groupes)

CREATE TABLE InfoProfil
(
    NomProfil         varchar(59) PRIMARY KEY,
    descriptionProfil varchar(139),
    publicIdProfil    varchar(14),
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

CREATE TABLE InfoProfil_Prive
(
    mailProfil     varchar(127),
    passwordProfil varchar(49),
    idProfil       bigint PRIMARY KEY,
    FOREIGN KEY (idProfil) REFERENCES Profil (idProfil)
);

CREATE TABLE InfoProfil_Reseaux
(
    idEnsembleReseaux bigint PRIMARY KEY,
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
    idProfil         bigint PRIMARY KEY,
    FOREIGN KEY (idInstrument) REFERENCES Instrument (idInstrument),
    FOREIGN KEY (idProfil) REFERENCES InfoProfil (idProfil)
);

CREATE TABLE Instrument
(
    idInstrument  smallint PRIMARY KEY,
    nomInstrument varchar(127)
);

-- Publications (pouvant être postées par musiciens ET groupes)

CREATE TABLE Post
(
    idPost   bigint PRIMARY KEY,
    datePost datetime,
    typePost tinyint,
    idProfil bigint,
    idGroupe bigint,
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

CREATE TABLE InfoProfil_Releases
(
    idRelease    bigint PRIMARY KEY,
    dateRelease  datetime,
    nameRelease  varchar(127),
    urlRelease   varchar(127),
    coverRelease bigint,
    typeRelease  tinyint,
    idProfil     bigint,
    idGroupe     bigint,
    FOREIGN KEY (idProfil) REFERENCES InfoProfil (IdProfil),
    FOREIGN KEY (idGroupe) REFERENCES InfoProfil (idGroupe),
    -- Vérifie qu'un seul type de profil est sollicité (musicien ou groupe)
    CONSTRAINT SingleProfileType check (
            (idProfil IS NULL OR idGroupe IS NULL)
            AND NOT (idProfil IS NULL AND idGroupe IS NULL)
        )
);