CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    university VARCHAR(100),
    score INT
);

INSERT INTO students (name, age, university, score) VALUES
('Ali Aliyev', 20, 'Bakı Dövlət Universiteti', 85),
('Aygün Hüseynova', 21, 'Azərbaycan Texniki Universiteti', 90),
('Kamran Məmmədov', 22, 'ADA Universiteti', 95),
('Gülnar Abbasova', 19, 'Bakı Dövlət Universiteti', 88),
('Elvin Quliyev', 23, 'Azərbaycan Dövlət İqtisad Universiteti', 92),
('Leyla Mehdiyeva', 20, 'Azərbaycan Dillər Universiteti', 87),
('Səbinə İsmayılova', 21, 'Azərbaycan Tibb Universiteti', 94),
('Rəşad Əliyev', 22, 'Xəzər Universiteti', 89),
('Nərgiz Məmmədova', 19, 'Bakı Mühəndislik Universiteti', 90),
('Orxan Qasımov', 23, 'Azərbaycan Dövlət Neft və Sənaye Universiteti', 91),
('Zaur Məmmədov', 24, 'Azərbaycan Memarlıq və İnşaat Universiteti', 86),
('Fidan Həsənova', 22, 'Azərbaycan Dövlət Pedaqoji Universiteti', 93),
('Taleh Rzayev', 21, 'Bakı Slavyan Universiteti', 88),
('Nigar Quliyeva', 20, 'Bakı Dövlət Universiteti', 92),
('Səmra Hacıyeva', 19, 'ADA Universiteti', 95),
('Murad Əliyev', 23, 'Azərbaycan Texniki Universiteti', 87),
('Sevinc Abbasova', 21, 'Azərbaycan Dövlət İqtisad Universiteti', 89),
('Elşən Qurbanov', 22, 'Azərbaycan Tibb Universiteti', 90);




