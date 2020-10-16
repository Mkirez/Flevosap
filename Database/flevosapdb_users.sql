create table gebruikers
(
    id             int auto_increment
        primary key,
    gebruikersnaam varchar(50)                        not null,
    wachtwoord     varchar(255)                       not null,
    created_at     datetime default CURRENT_TIMESTAMP null,
    updated_at     datetime default CURRENT_TIMESTAMP null,
    constraint gebruikersnaam
        unique (gebruikersnaam)
);

INSERT INTO flevosapusers.gebruikers (id, gebruikersnaam, wachtwoord, created_at, updated_at) VALUES (1, 'Alex van der Steen', '$2y$10$sLI2YJTh4hps3.4wxZaNxujc.4F.Hn5GqA1SSjhAQt6w4UZ.IPlpm', '2020-10-09 14:53:05', '2020-10-09 14:53:05');
INSERT INTO flevosapusers.gebruikers (id, gebruikersnaam, wachtwoord, created_at, updated_at) VALUES (2, 'suhsuhman', '1234567', '2020-10-13 14:39:59', '2020-10-13 14:39:59');