USE website;
CREATE TABLE client (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nom_client VARCHAR(255),
    date_commande DATE,
    camion VARCHAR(50)
);


INSERT INTO client (nom_client, date_commande, camion) VALUES
('Alice Johnson', '2023-01-05', 'Mercedes-Benz Actros'),
('Bob Smith', '2023-02-10', 'Volvo FH16'),
('Charlie Brown', '2023-03-15', 'Scania R 730'),
('David Lee', '2023-04-20', 'MAN TGX'),
('Emma White', '2023-05-25', 'Kenworth W900'),
('Frank Davis', '2023-06-01', 'Peterbilt 579'),
('Grace Martinez', '2023-07-06', 'International LT'),
('Henry Taylor', '2023-08-11', 'Freightliner Cascadia'),
('Isabella Jackson', '2023-09-16', 'Renault T Range'),
('Jack Harris', '2023-10-21', 'Iveco S-WAY'),
('Sophia Clark', '2023-11-26', 'Volvo VNL 860'),
('Liam Anderson', '2023-12-31', 'Kenworth T680'),
('Olivia Garcia', '2023-02-15', 'Scania S 730'),
('Noah Martinez', '2023-03-20', 'Mercedes-Benz Arocs'),
('Ava Johnson', '2023-04-25', 'Volvo FMX'),
('Liam Wilson', '2023-05-30', 'MAN TGS'),
('Emma Taylor', '2023-06-05', 'Kenworth T800'),
('Oliver Anderson', '2023-07-10', 'Peterbilt 389'),
('Sophia Lee', '2023-08-15', 'International LoneStar'),
('Noah Davis', '2023-09-20', 'Freightliner M2'),
('Isabella Brown', '2023-10-25', 'Renault K Range'),
('Jackson Smith', '2023-11-30', 'Iveco Stralis'),
('Olivia Johnson', '2023-12-05', 'Volvo VNR 640'),
('Liam White', '2023-01-10', 'Kenworth W990');
