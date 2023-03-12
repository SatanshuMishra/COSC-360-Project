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
  rankingIndex integer NOT NULL,
  isVisible boolean NOT NULL
);

CREATE TABLE post (
  discussionId integer NOT NULL,
  authorId integer NOT NULL,
  postTitle varchar(255) NOT NULL,
  postContent varchar(255) NOT NULL,
  createdAt datetime NOT NULL,
  FOREIGN KEY (authorId) REFERENCES user (id),
  FOREIGN KEY (discussionId) REFERENCES discussion (id)
);

CREATE TABLE reply (
  discussionId integer NOT NULL,
  authorId integer NOT NULL,
  content varchar(255) NOT NULL,
  createdAt datetime NOT NULL,
  FOREIGN KEY (discussionId) REFERENCES discussion (id),
  FOREIGN KEY (authorId) REFERENCES user (id)
);

CREATE TABLE report (
  id integer PRIMARY KEY AUTO_INCREMENT,
  discussionId integer NOT NULL,
  authorId integer NOT NULL,
  content integer NOT NULL,
  reportedAt datetime NOT NULL,
  reviewed boolean,
  FOREIGN KEY (discussionId) REFERENCES discussion (id),
  FOREIGN KEY (authorId) REFERENCES user (id)
);

CREATE TABLE tag (
  id integer PRIMARY KEY AUTO_INCREMENT,
  topic varchar(255) NOT NULL
);

CREATE TABLE topicManager (
  id integer PRIMARY KEY AUTO_INCREMENT,
  discussionId integer NOT NULL,
  tagId integer NOT NULL,
  FOREIGN KEY (discussionId) REFERENCES discussion (id),
  FOREIGN KEY (tagId) REFERENCES tag (id)
);


/* INSERT INTO tag (topic) VALUES ('NEWS');
INSERT INTO tag (topic) VALUES ('SPACE');
INSERT INTO tag (topic) VALUES ('SPORTS');
INSERT INTO tag (topic) VALUES ('Q&A');
INSERT INTO tag (topic) VALUES ('GAMING');
INSERT INTO tag (topic) VALUES ('COOKING');
INSERT INTO tag (topic) VALUES ('POSITIVITY');

INSERT INTO discussion (rankingIndex, isVisible) VALUES (1, TRUE);
INSERT INTO topicManager (discussionId, tagId) VALUES (1, 1);
INSERT INTO topicManager (discussionId, tagId) VALUES (1, 3);
INSERT INTO post (discussionId, authorId, postTitle, content, createdAt) VALUES (1, 3, 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et tellus et purus accumsan fringilla nec ac nunc. Vivamus ac nibh nec erat sagittis bibendum eget vitae ipsum. Proin rhoncus pharetra orci, a luctus nisi pulvinar a. Nam ut risus eget mi egestas aliquet. Donec blandit tellus a purus euismod mattis ut interdum leo. In id ipsum sed elit volutpat maximus. Integer nunc nulla, aliquam ut elit at, sollicitudin egestas turpis. Nulla a magna varius, mattis nibh et, suscipit arcu.', NOW()); */