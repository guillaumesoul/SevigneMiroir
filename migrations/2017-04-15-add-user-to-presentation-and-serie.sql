ALTER TABLE presentation ADD user_id INT DEFAULT NULL;
ALTER TABLE presentation ADD CONSTRAINT FK_9B66E893A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE;
CREATE INDEX IDX_9B66E893A76ED395 ON presentation (user_id);

ALTER TABLE serie ADD user_id INT DEFAULT NULL;
ALTER TABLE serie ADD CONSTRAINT FK_AA3A9334A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE;
CREATE INDEX IDX_AA3A9334A76ED395 ON serie (user_id);