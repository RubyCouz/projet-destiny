#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Database: destinyProject
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `destinyProject`;
USE `destinyProject`;


#------------------------------------------------------------
# Table: u01cc_users
#------------------------------------------------------------

CREATE TABLE `u01cc_users`(
        `id`        Int  Auto_increment  NOT NULL ,
        `lastname`  Varchar (50) NOT NULL ,
        `firstname` Varchar (50) NOT NULL ,
        `birthdate` Varchar (15) NOT NULL ,
        `email`     Varchar (100) NOT NULL ,
        `gamerTag`  Varchar (50) NOT NULL ,
        `password`  Varchar (80) NOT NULL , 
        `console` Varchar NOT NULL,
CONSTRAINT u01cc_users_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_tchat
#------------------------------------------------------------

CREATE TABLE `u01cc_tchat`(
        `id`             Int  Auto_increment  NOT NULL ,
        `content`        Text NOT NULL ,
        `dateHour`       Datetime NOT NULL ,
        `id_u01cc_users` Int NOT NULL , 
CONSTRAINT u01cc_tchat_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_role
#------------------------------------------------------------

CREATE TABLE `u01cc_role`(
        `id`             Int  Auto_increment  NOT NULL ,
        `type`           Varchar (50) NOT NULL ,
        `id_u01cc_users` Int NOT NULL , 
CONSTRAINT u01cc_role_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_categoriesContribs
#------------------------------------------------------------

CREATE TABLE `u01cc_categoriesContribs`(
        `id`   Int  Auto_increment  NOT NULL ,
        `name` Varchar (50) NOT NULL , 
CONSTRAINT u01cc_categoriesContribs_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_status
#------------------------------------------------------------

CREATE TABLE `u01cc_status`(
        `id`   Int  Auto_increment  NOT NULL ,
        `name` Varchar (50) NOT NULL , 
CONSTRAINT u01cc_status_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_contribs
#------------------------------------------------------------

CREATE TABLE `u01cc_contribs`(
        `id`                          Int  Auto_increment  NOT NULL ,
        `title`                       Text NOT NULL ,
        `content`                     Text NOT NULL ,
        `dateHour`                    Datetime NOT NULL ,
        `id_u01cc_categoriesContribs` Int NOT NULL ,
        `id_u01cc_status`             Int NOT NULL ,
        `id_u01cc_users`              Int NOT NULL , 
CONSTRAINT u01cc_contribs_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_comments
#------------------------------------------------------------

CREATE TABLE `u01cc_comments`(
        `id`                Int  Auto_increment  NOT NULL ,
        `content`           Text NOT NULL ,
        `dateHour`          Datetime NOT NULL ,
        `id_u01cc_users`    Int NOT NULL ,
        `id_u01cc_contribs` Int NOT NULL , 
CONSTRAINT u01cc_comments_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_categoriesForum
#------------------------------------------------------------

CREATE TABLE `u01cc_categoriesForum`(
        `id`             Int  Auto_increment  NOT NULL ,
        `name`           Varchar (50) NOT NULL ,
        `id_u01cc_users` Int NOT NULL , 
CONSTRAINT u01cc_categoriesForum_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_forum
#------------------------------------------------------------

CREATE TABLE `u01cc_forum`(
        `id`                       Int  Auto_increment  NOT NULL ,
        `subject`                  Varchar (150) NOT NULL ,
        `content`                  Text NOT NULL ,
        `dateHour`                 Datetime NOT NULL ,
        `id_u01cc_status`          Int NOT NULL ,
        `id_u01cc_categoriesForum` Int NOT NULL ,
        `id_u01cc_users`           Int NOT NULL , 
CONSTRAINT u01cc_forum_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: u01cc_forumComments
#------------------------------------------------------------

CREATE TABLE `u01cc_forumComments`(
        `id`                     Int  Auto_increment  NOT NULL ,
        `content`                Text NOT NULL ,
        `dateHour`               Datetime NOT NULL ,
        `id_u01cc_forum`         Int NOT NULL ,
        `id_u01cc_forumComments` Int NOT NULL , 
CONSTRAINT u01cc_forumComments_PK PRIMARY KEY (`id`)
)ENGINE=InnoDB;




ALTER TABLE `u01cc_tchat`
	ADD CONSTRAINT u01cc_tchat_u01cc_users0_FK
	FOREIGN KEY (`id_u01cc_users`)
	REFERENCES u01cc_users(`id`);

ALTER TABLE `u01cc_role`
	ADD CONSTRAINT u01cc_role_u01cc_users0_FK
	FOREIGN KEY (`id_u01cc_users`)
	REFERENCES u01cc_users(`id`);

ALTER TABLE `u01cc_contribs`
	ADD CONSTRAINT u01cc_contribs_u01cc_categoriesContribs0_FK
	FOREIGN KEY (`id_u01cc_categoriesContribs`)
	REFERENCES u01cc_categoriesContribs(`id`);

ALTER TABLE `u01cc_contribs`
	ADD CONSTRAINT u01cc_contribs_u01cc_status1_FK
	FOREIGN KEY (`id_u01cc_status`)
	REFERENCES u01cc_status(`id`);
