CREATE TABLE user (
  id integer PRIMARY KEY AUTO_INCREMENT,
  firstName varchar(255) NOT NULL,
  lastName varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  demeritPoints integer,
  userKey varchar(255) NOT NULL
);

CREATE TABLE discussion (
  id integer PRIMARY KEY AUTO_INCREMENT,
  rankingIndex integer,
  isVisible boolean
);

CREATE TABLE post (
  discussionId integer,
  authorId integer,
  content varchar(255),
  createdAt datetime,
  FOREIGN KEY (authorId) REFERENCES user (id),
  FOREIGN KEY (discussionId) REFERENCES discussion (id)
);

CREATE TABLE reply (
  discussionId integer,
  authorId integer,
  content varchar(255),
  postedAt datetime,
  FOREIGN KEY (discussionId) REFERENCES discussion (id),
  FOREIGN KEY (authorId) REFERENCES user (id)
);

CREATE TABLE report (
  id integer PRIMARY KEY AUTO_INCREMENT,
  discussionId integer,
  authorId integer,
  content integer,
  reportedAt datetime,
  reviewed boolean,
  FOREIGN KEY (discussionId) REFERENCES discussion (id),
  FOREIGN KEY (authorId) REFERENCES user (id)
);

CREATE TABLE tag (
  id integer PRIMARY KEY AUTO_INCREMENT,
  topic varchar(255)
);

CREATE TABLE topicManager (
  id integer PRIMARY KEY AUTO_INCREMENT,
  discussionId integer,
  tagId integer,
  FOREIGN KEY (discussionId) REFERENCES discussion (id),
  FOREIGN KEY (tagId) REFERENCES tag (id)
);
