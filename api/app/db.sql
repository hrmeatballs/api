
DROP TABLE IF EXISTS student;
CREATE TABLE students
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(40),
    class_id INT,
    password VARCHAR(255),
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS teachers;
CREATE TABLE teachers
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(40),
    class_id VARCHAR(20),
    password VARCHAR(255),
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS parents;
CREATE TABLE parents
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    students_id INT,
    password VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE classes
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(40),
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS levels;
CREATE TABLE levels
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    world_id INT,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS worlds;
CREATE TABLE worlds
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(40),
    PRIMARY KEY (id)
);

CREATE TABLE relation_students_teachers
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    class_id VARCHAR(40),
    teacher_id INT,
    PRIMARY KEY (id)
);

CREATE TABLE relation_students_parents
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    parent_id INT,
    student_id INT,
    PRIMARY KEY (id)
);

ALTER TABLE students
    ADD CONSTRAINT FK_StudentClass
        FOREIGN KEY (class_id) REFERENCES classes(id);

ALTER TABLE teachers
    ADD CONSTRAINT FK_TeacherClass
        FOREIGN KEY (class_id) REFERENCES classes(id);

ALTER TABLE parents
    ADD CONSTRAINT FK_ParentStudent
        FOREIGN KEY (students_id) REFERENCES students(id);

ALTER TABLE levels
    ADD CONSTRAINT FK_LevelWorld
    FOREIGN KEY (world_id) REFERENCES worlds(id);

ALTER TABLE relation_students_teachers
    ADD CONSTRAINT FK_RelationStudentsTeachersClassID
        FOREIGN KEY (class_id) REFERENCES classes(id),
    ADD CONSTRAINT FK_RelationStudentsTeachersID
        FOREIGN KEY (teacher_id) REFERENCES teachers(id);

ALTER TABLE relation_students_parents
    ADD CONSTRAINT FK_relation_students_parents
        FOREIGN KEY (parent_id) REFERENCES parents(id),
ADD FOREIGN KEY (student_id) REFERENCES students(id);